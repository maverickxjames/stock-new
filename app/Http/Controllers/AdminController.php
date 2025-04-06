<?php

namespace App\Http\Controllers;

use App\Models\deposit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
// db facade
use Illuminate\Support\Facades\DB;

use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;
use App\Models\withdraw;
//imort settings model
use GrahamCampbell\ResultType\Success;
// fetch cardon
use Carbon\Carbon;

class AdminController extends Controller
{
    private function generateUserId()
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';

        $userId = substr(str_shuffle($letters), 0, 2) . substr(str_shuffle($numbers), 0, 4);
        return $userId;
    }
    private function generateUsername()
    {
        $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $username = substr(str_shuffle($letters), 0, 6);
        return $username;
    }

    public function home(Request $request): View
    {
        return view('admin.home');
    }

    public function add_user(Request $request): View
    {
        return view('admin.addUser');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'role' => 'required',
        ]);
        $userId = $this->generateUserId();
        $isDummy = $request->role === 'dummy_user' ? 1 : 0;
        $username = $this->generateUsername();


        //create user
        try {
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'plain_password' => $request->password,
                'user_id' => $userId,
                'is_dummy' => $isDummy,
                'username' => $username,
            ]);
            return redirect()->back()->with('success', 'User added successfully!');
        } catch (\Exception $e) {
            dd('Insert Error: ' . $e->getMessage());
        }
    }

    public function add_admin(Request $request): View
    {
        $roles = DB::table('roles')->get();
        return view('admin.addAdmin', ['roles' => $roles]);
    }

    public function addAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:admins,username|max:255',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required',
        ]);
        //fetch role name from roles table using of role_id
        $role = DB::table('roles')->where('id', $request->role)->first();
        $roleName = $role->name;
        try {
            DB::table('admins')->insert([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role_id' => $request->role,
                'plain_password' => $request->password,
            ]);
            $msg = $roleName . " added successfully!";
            return redirect()->back()->with('success', $msg);
        } catch (\Throwable $th) {
            dd('Insert Error: ' . $th->getMessage());
        }
    }

    public function allAdmin(Request $request): View
    {
        $admins = DB::table('admins')
            ->join('roles', 'admins.role_id', '=', 'roles.id')
            ->select('admins.*', 'roles.name as role_name', 'roles.description as role_description') // Single select call
            ->get();

        return view('admin.allAdmin', ['admins' => $admins]);
    }

    public function allUser(Request $request): View
    {
        $users = DB::table('users')->get();
        return view('admin.allUser', ['users' => $users]);
    }

    public function user(Request $request, $id): View
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.viewUser', ['user' => $user]);
    }


    public function approveDeposit(Request $request)
    {
        $request->validate(
            [
                'order_id' => 'required|exists:deposits,order_id',
                'r_type' => 'required|in:confirm,decline',
            ]
        );

        $txnId = $request->order_id;
        $rType = $request->r_type;

        if ($rType === 'confirm') {
            $updated = Deposit::where('order_id', $txnId)->where('status', 0)->update(['status' => 1], ['remark' => 'Deposit Request Approved']);
            $deposit = Deposit::where('order_id', $txnId)->where('status', 1)->first();

            $user = User::find($deposit->userid);
            $user->real_wallet += $deposit->amount;
            $user->save();

            if ($updated) {
                echo "success_confirm";
            } else {
                echo "error";
            }
        } else {
            $deposit = Deposit::where('order_id', $txnId)->where('status', 0)->first();

            if (!$deposit) {
                echo "error";
            }

            $deposit->status = 2;
            $deposit->remark = 'Deposit Request Declined : ' . $deposit->amount;
            $deposit->save();

            echo "success_decline";
        }
    }



    public function approveWithdraw(Request $request)
    {
        $request->validate(
            [
                'txnid' => 'required|exists:withdraws,txnid',
                'r_type' => 'required|in:confirm,decline',
            ]
        );

        $txnId = $request->txnid;
        $rType = $request->r_type;

        if ($rType === 'confirm') {
            $updated = Withdraw::where('txnid', $txnId)
                ->where('status', 0)
                ->update([
                    'status' => 1,
                    'remark' => 'Withdraw Request Approved',
                ]);



            if ($updated) {
                echo "success";
            } else {
                echo "error";
            }
        } else {
            $withdraw = Withdraw::where('txnid', $txnId)->where('status', 0)->first();

            $user = User::find($withdraw->userid);
            $user->withdraw_wallet += $withdraw->amount;
            $user->save();

            if (!$withdraw) {
                echo "error";
            }

            $withdraw->status = 2;
            $withdraw->remark = 'Withdraw Request Declined : ' . $withdraw->amount;
            $withdraw->save();

            echo "success";
        }
    }

    public function depositTxn(Request $request): View
    {
        $deposits = DB::table('deposits')->get();
        return view('admin.deposits', ['deposits' => $deposits]);
    }

    public function withdrawTxn(Request $request): View
    {
        $withdraws = DB::table('withdraws')->get();
        return view('admin.withdraws', ['withdraws' => $withdraws]);
    }

    public function tradeTxn(Request $request): View
    {
        return view('admin.trades');
    }
    

   


    
    public function addFund(Request $request, $userId)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $user = User::find($userId);
        $user->real_wallet += $request->amount;
        $user->save();

        return response()->json(['success'=>true,'message' => 'Fund added successfully']);
    }


    public function addWatchlist(Request $request)
    {
        return view('admin.addWatchlist');
    }

    public function fetchWatchlist(Request $request)
    {
        $search = $request->query('search', '');
        $type = strtolower($request->query('type', 'all'));
        $sortOrder = strtolower($request->query('sortOrder', 'asc'));
        $page = (int) $request->query('page', 1);
        $limit = (int) $request->query('limit', 10);
        $offset = ($page - 1) * $limit;
    
        $today = Carbon::now(); // Get current date
    
        $query = DB::table('future_temp')
            ->where('assetSymbol', 'like', "%" . $search . "%")
            ->whereRaw("STR_TO_DATE(expiry, '%d %b %y') >= ?", [$today]); // Filter expired contracts
        if($type == 'all'){
            $query->where('instrumentType', '!=', 'IDX');
        }
        elseif ($type == 'future') {
            $query->where('instrumentType', 'FUT')->where('segment', 'NSE_FO');
        } elseif ($type == 'option') {
            $query->where(function ($q) {
                $q->where('instrumentType', 'CE')
                  ->where('segment', 'NSE_FO')
                  ->orWhere('instrumentType', 'PE');
            });
        } elseif ($type == 'indices') {
            $query->where('instrumentType', 'IDX');
        } elseif ($type == "mcx") {
            $query->where(function ($q) {
                $q->where('instrumentType', 'FUT')
                  ->where('segment', 'MCX_FO');
            });
        }


    
        // Apply limit & offset for pagination
        // $data = $query->limit($limit)->offset($offset)->get();
        // $data = $query->orderBy('expiry', $sortOrder)->paginate($limit, ['*'], 'page', $page);
        $data = $query->orderBy('expiry', $sortOrder)->get();
    
        return response()->json($data);
    }

    public function addToWatchlist($id)
    {
        try {
            DB::table('future_temp')->where('id', $id)->update(['is_watchlist' => 1]);
            return response()->json(['success' => true, 'message' => 'Watchlist updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating watchlist: ' . $e->getMessage()]);
        }
    }

    public function removeFromWatchlist($id)
    {
        try {
            DB::table('future_temp')->where('id', $id)->update(['is_watchlist' => 0]);
            return response()->json(['success' => true, 'message' => 'Watchlist updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error updating watchlist: ' . $e->getMessage()]);
        }
    }
   
}
