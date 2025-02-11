<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
// db facades 
use Illuminate\Support\Facades\DB;






class StockController extends Controller
{
    public function nifty()
    {
        return view('nifty');
    }
    public function sensex()
    {
        return view('sensex');
    }

    public function niftyInner($slug, $id)
    {
        return view('stockview', ['id' => $id]);
    }



    function searchScript(Request $request)
    {
        $search = $request->search ?? '';
        $type = $request->type ?? 'all';
        $page = (int) ($request->page ?? 1);
        $limit = (int) ($request->limit ?? 10);
        $offset = ($page - 1) * $limit;

        $query = DB::table('future_temp')
            ->where('assetSymbol', 'like', "%" . $search . "%");

        if ($type == 'future') {
            $query->where('instrumentType', 'FUT');
        } elseif ($type == 'option') {
            $query->where(function ($q) {
                $q->where('instrumentType', 'CE')
                    ->orWhere('instrumentType', 'PE');
            });
        } elseif ($type == 'indices') {
            $query->where('instrumentType', 'IDX');
        }

        // Apply limit & offset for pagination
        $data = $query->limit($limit)->offset($offset)->get();

        return response()->json($data);
    }


    // public function fetchStockData($id)
    // {
    //     $today = Carbon::now();
    //     $time = $today->format('H:i:s');



    //     // Check if today is Saturday (6) or Sunday (0)
    //     if ($today->isSaturday()) {
    //         // If today is Saturday, get the previous Friday
    //         $today = $today->subDay(1);
    //     } elseif ($today->isSunday()) {
    //         // If today is Sunday, get the previous Friday
    //         $today = $today->subDays(2);
    //     }

    //     $today = $today->subDay(1);

    //     if ($time >= '09:15:00' && $time <= '15:30:00') {
    //         $stocktype = 'intraday';
    //     } else {
    //         $stocktype = 'historical';
    //     }

    //     // Format the date as needed, e.g., 'Y-m-d'
    //     $cu = $today->format('Y-m-d');

    //     // Set the URL with the given $id
    //     // $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN"."/" . $id . "/1minute"."/". $cu . "/";

    //     $url = "https://api.upstox.com/v2/historical-candle/" . $id . "/1minute/2025-02-11/2025-02-10";
    //     // return $url;

    //     // Make the HTTP GET request to fetch data
    //     $response = Http::get($url);

    //     // Check if the request was successful
    //     if ($response->successful()) {
    //         // Decode JSON response and access the specific data structure
    //         $data = $response->json()['data']['candles'] ?? [];

    //         // Reverse the data
    //         $data = array_reverse($data);

    //         // Return a JSON response with the data
    //         return response()->json($data);
    //     } else {
    //         // Return an error response if the request failed
    //         return response()->json(['error' => 'Unable to  data'], 500);
    //     }
    // }

    public function fetchStockData($id, $period = 'day')
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');

        if ($today->isSaturday()) {
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            $today = $today->subDays(2);
        }


        switch ($period) {
            case 'week':
                $interval = '30minute'; 
                $startDate = Carbon::now()->subDays(7)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'month':
                $interval = 'day';
                $startDate = Carbon::now()->subMonths(1)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'year':
                $interval = 'week'; 
                $startDate = Carbon::now()->subYears(10)->format('Y-m-d'); 
                $endDate = $today->format('Y-m-d');
                break;

            case 'day': 
            default:
                $interval = '1minute';
                $startDate = Carbon::now()->subDay(1)->format('Y-m-d'); 
                $startDate ="2025-02-10"; 
                $endDate="2025-02-11";
                break;
        }
       
        

        
        if ($time >= '09:15:00' && $time <= '15:30:00' && $period === 'day') {
            $url = "https://api.upstox.com/v2/historical-candle/intraday/" . $id . "/" . $interval;
        } else {
            $url = "https://api.upstox.com/v2/historical-candle/" . $id . "/" . $interval . "/" . $endDate . "/" . $startDate;
        }

        // return $url;

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json()['data']['candles'] ?? [];
            $data = array_reverse($data); // Reverse for correct chart order
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }


    public function fetchNifty50StockData()
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');



        // Check if today is Saturday (6) or Sunday (0)
        if ($today->isSaturday()) {
            // If today is Saturday, get the previous Friday
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            // If today is Sunday, get the previous Friday
            $today = $today->subDays(2);
        }

        $today = $today->subDay(1);

        if ($time >= '09:15:00' && $time <= '15:30:00') {
            $stocktype = 'intraday';
        } else {
            $stocktype = 'historical';
        }

        // Format the date as needed, e.g., 'Y-m-d'
        $cu = $today->format('Y-m-d');

        // Set the URL with the given $id
        $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN/NSE_INDEX%7CNifty%2050/1minute/" . $cu . "/";

        // Make the HTTP GET request to fetch data
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode JSON response and access the specific data structure
            $data = $response->json()['data']['candles'] ?? [];

            // Reverse the data
            $data = array_reverse($data);

            // Return a JSON response with the data
            return response()->json($data);
        } else {
            // Return an error response if the request failed
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }
    public function fetchSensexStockData()
    {
        $today = Carbon::now();
        $time = $today->format('H:i:s');



        // Check if today is Saturday (6) or Sunday (0)
        if ($today->isSaturday()) {
            // If today is Saturday, get the previous Friday
            $today = $today->subDay(1);
        } elseif ($today->isSunday()) {
            // If today is Sunday, get the previous Friday
            $today = $today->subDays(2);
        }

        $today = $today->subDay(1);

        if ($time >= '09:15:00' && $time <= '15:30:00') {
            $stocktype = 'intraday';
        } else {
            $stocktype = 'historical';
        }

        // Format the date as needed, e.g., 'Y-m-d'
        $cu = $today->format('Y-m-d');

        // Set the URL with the given $id
        $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN/BSE_INDEX%7CSENSEX/1minute/" . $cu . "/";

        // Make the HTTP GET request to fetch data
        $response = Http::get($url);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode JSON response and access the specific data structure
            $data = $response->json()['data']['candles'] ?? [];

            // Reverse the data
            $data = array_reverse($data);

            // Return a JSON response with the data
            return response()->json($data);
        } else {
            // Return an error response if the request failed
            return response()->json(['error' => 'Unable to fetch data'], 500);
        }
    }

    public function orderHistory(Request $request)
    {
        return view('order');
    }

    public function limitOrder()
    {
        return view('limitorder');
    }

    public function updateFuture()
    {
        // fetch symbol list from db
        $equities = DB::table('equities')->get();
        foreach ($equities as $equity) {
            $symbol = $equity->symbol;

            if ($equity->id < 114) {
                continue;
            }
            // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=aubank&records=90&segments=FUT"; 
            $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=" . $symbol . "&records=500&segments=OPT";
            $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; profile_id_web=8576772; utm_referer=https%3A%2F%2Fwww.google.co.in%2F; _gid=GA1.2.2103172375.1737044348; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga_CLCPGTZJXV=GS1.1.1737053821.33.1.1737055642.60.0.0; _ga=GA1.1.708249857.1730892005; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJmNmViMTUyN2FiOTkzOGRmZDZhODY5M2U5MmZlODJiYSIsImV4cCI6MTczNzY4NTAxMn0.LNAX_UWnJaplFB8smGWLpaMyScK32xQiSEdSXJKtCoo; auth_identity_token_expiry=1737685011201; profile_id=8576772; user_type=CUSTOMER; user_id=3KBR58; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoieUFudjZpUzZwVmt4V1BVajdXNDFqRHZZOUFzIiwiaWF0IjoxNzM3MDgzNTYzLCJleHAiOjE3MzcwODcxNjMsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6ImtWQ0gwTEQtOVVXc0hhN193S0g0T0xzZEZLRSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.hFwSlmM0nS7VSVmvYWWnckVDTfJaPEHIpdDVDHj9DiexSKNUYP0kxKnfC6S6r1j5fzLfe7KgIqxe35E9YbHWoPQzw4Lb6WvF_wli0FkTDXvKWWDxZjvQt6KXOctYhbqwh-01KjN4DjZ7u7vXhjHRIA6jLaRkKSpwhHTP11o9n1RAWZqsiPg5kJIVtSVrHFXFoh2iVn6Pv09sLEr5P3xrxevjM73UwkcBNgUnV5huj2LagAcjyA__9xNeQiaLeZRb-ly2FlwCbw-_8H-u4U1IyL5ndQr9qRcMOy-54k4jpnlobXF6XlHcIWUH5SNPossGVtuRN4UQVsWE49CA_W4FnQ; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoia1ZDSDBMRC05VVdzSGE3X3dLSDRPTHNkRktFIiwiaWF0IjoxNzM3MDgzNTYzLCJleHAiOjE3MzcxNjk5NjMsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoieUFudjZpUzZwVmt4V1BVajdXNDFqRHZZOUFzIiwicmVmcmVzaF90b2tlbl9pZCI6ImtWQ0gwTEQtOVVXc0hhN193S0g0T0xzZEZLRSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.P7kHLuBuqscPQiozwIK3yot4gv9FLCQrVl3Ax3R3lnJXh5nszMIaFBGgiQHajYvPMwpZaF1cYg1knPiKlUJdHft3bAkWkf6QibO7Ht5AA1MVQoFMKlCSTu0V4lGKXUerW9sv9nSB-PkyhOO0v0V1CUzKVkVpoZb30eTkGDSh4Z4L5ErQPhKQ9JE0QvOBOeq4qKT9vr-cICzlBE5zMQ3yVOisUKGI2b7SheP10foTviQ_yvAKQEHa5pNGsYQo_dM3-EQ2jFylnxxHgLd_8-h4PR6tmaUrGDP4W2d4xHaiMpL7jHsrhUXvnQo_2-NwDd9QFUdi6pDf3Un_J0ozDDm4eg; customer_status=ACTIVE; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%22194714d1858a55585-006c1d9f50fd13-26011851-9e793-194714d1858a55585%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%7D; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A1%2C%22s%22%3A1737083582%2C%22t%22%3A1737083582%7D; _ga_RLJ6WSLNCC=GS1.1.1737083583.19.0.1737083583.0.0.0; __cf_bm=K6uff_lpAc44UO.P6uDlwdfWA.abHDIG2K6ojGe6Vgw-1737083594-1.0.1.1-Sk2XfzX0Z91sBxDBLXAHWYt3DVyXKAj.syt6nA_XlfjMIBeNIoT.93R1LypWdELY; __cfruid=7888451e5bbe9d511d922391077e3fbf8c2ac21c-1737083594; _cfuvid=d3qQkUQUg12IeloeBJv4Qms8DG8.SfB3j693sXGxIgw-1737083594965-0.0.1.1-604800000";
            $response = Http::withHeaders([
                'cookie' => $cookie,
            ])->get($url);
            $data = $response->json();
            // return $data;
            $fetchList =  $data['data'];

            // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=aubank&records=500&segments=OPT";
            // $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; profile_id_web=8576772; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJkNjgzMzIwNDhkMWM3MTZhM2U4YzZiZDNiOGZmMGFmYSIsImV4cCI6MTczNzYxNjYzM30.zd0aIZtQkXn6rNfH4eQNoCPGxIfofBhlq1puu_jVRSA; auth_identity_token_expiry=1737616632150; user_id=3KBR58; utm_referer=https%3A%2F%2Fwww.google.co.in%2F; _gid=GA1.2.2103172375.1737044348; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga_CLCPGTZJXV=GS1.1.1737053821.33.1.1737055642.60.0.0; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiR0k0VGllbkNFaTc5UUJWWXdKTkw3cVRKY0NZIiwiaWF0IjoxNzM3MDU1NjcyLCJleHAiOjE3MzcwNTkyNzIsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6IkVnWjRfcXluUDRqZjRwUGNZUWZFUEpQVC1TRSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.WJfeq8NP37QF_LOLyvnj4hqc4cxC8-Ay6KaV8dof_Rwb2Gjl8YzIL8ftILJxZHsmvWbNo7RH18tXNn72kmCccUy7qaONyJ6k49VvN5cReeh5NVoDlNziwqgkP4TI7kAJwQXMM6q143D13T-DH-_Gter8qNHBHQj3cgJvuhp7IlAmuc_75UaH6ONpNsvPRsWYo_rH3-Mrqbmgx3nNDlBu06GGw_qgWFGYI4zygnmOLe728BjTzvN33azZ55fLcKFIfs3IfnQDkKMt8PYgwG3zvDExv6knNKWFMeYAxNobHzzAqRB30BRgictKWG5oScIPK_Xl61sTdPR-X9__Gu5IXQ; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiRWdaNF9xeW5QNGpmNHBQY1lRZkVQSlBULVNFIiwiaWF0IjoxNzM3MDU1NjcyLCJleHAiOjE3MzcxNDIwNzIsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoiR0k0VGllbkNFaTc5UUJWWXdKTkw3cVRKY0NZIiwicmVmcmVzaF90b2tlbl9pZCI6IkVnWjRfcXluUDRqZjRwUGNZUWZFUEpQVC1TRSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.fuacfKrmyh9Urk0mQFZBkaRf0nCBIyudsKhFHEKE-9tT-zjO8qWxEVjnhWY9Wa1xCES6J5hhLn4zz3dZwSXX4JmEYVPT8n3lIh8YKPOh19TWH_Xd-Nb74E-sDLT49VspZ6ZA84p9dAFBlJPWwZvAEmyjKEnlFdQoLAzQ4GgqB2ZRKJG6u9yu8A0HEBsmPJTQqJHp_S_NUgTTyFqtWCzbodhjN4QG2NTSBCw9gC0LAMO0OwzaEhsjAmfwHMUZdZd-nZGh3OBVP2wM1X-y9bXOvNH4buVDibg6Yt8J9wl9xSIRVlhcg0-P2bChLh1Ta7azwgnLbFPpl-rizCDrHt7u5Q; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%221945c97df0ed34a00-03202e79ddce11-26011851-1fa400-1945c97df0ed34a00%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%7D; _ga=GA1.1.708249857.1730892005; _ga_RLJ6WSLNCC=GS1.1.1737055678.17.0.1737055678.0.0.0; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A2%2C%22s%22%3A1737055678%2C%22t%22%3A1737055860%7D; __cf_bm=2FLHmvPblS6RTqWqHS2pKtVASqhzd5fdoPAAjBdd4iY-1737056045-1.0.1.1-Hg3Kr.QNSC6hYisC4uGgF4s02IAIeDV0oQsgKjkKiWxTVuONdjmN1yTsBFTl1osm; __cfruid=417a3f17eef54ef3389c6f14b16bb39dcf1610c8-1737056045; _cfuvid=L2sdQe6KRb4Wj8kinC5sdRrLIGZw9JsZ4zQmt7lCt4g-1737056045451-0.0.1.1-604800000";
            // $response = Http::withHeaders([
            //     'cookie' => $cookie,
            // ])->get($url);
            // $data = $response->json();




            $fetchList =  $data['data']['searchList'];
            foreach ($fetchList as $fetch) {


                $instrumentKey = $fetch['attributes']['instrumentKey'];

                $tradingSymbol = $fetch['attributes']['tradingSymbol'];
                $segment = $fetch['attributes']['segment'];
                $expiry = $fetch['attributes']['expiry'];
                $instrumentType = $fetch['attributes']['instrumentType'];
                $assetSymbol = $fetch['attributes']['assetSymbol'];
                $strikePrice = $fetch['attributes']['strikePrice'];
                $exchange = $fetch['attributes']['exchange'];
                $assetType = $fetch['attributes']['assetType'];
                $assetKey = $fetch['attributes']['assetKey'];
                // NSE_EQ|INE113A01013 remove "NSE_EQ|" from assetKey 
                $isIn = explode('|', $assetKey)[1];
                $searchedField = $fetch['attributes']['searchedField'];
                $exchangeToken = $fetch['attributes']['exchangeToken'];
                $assetToken = $fetch['attributes']['assetToken'];

                // INSERT INTO `future_temp`(`id`, `instrumentKey`, `tradingSymbol`, `segment`, `expiry`, `instrumentType`, `assetSymbol`, `exchange`, `assetType`, `assetKey`, `isIn`, `exchangeToken`, `assetToken`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]') 

                $insert = DB::table('future_temp')->insert([
                    'instrumentKey' => $instrumentKey,
                    'tradingSymbol' => $tradingSymbol,
                    'segment' => $segment,
                    'expiry' => $expiry,
                    'instrumentType' => $instrumentType,
                    'assetSymbol' => $assetSymbol,
                    'exchange' => $exchange,
                    'assetType' => $assetType,
                    'isIn' => $isIn,
                    'assetKey' => $assetKey,
                    'exchangeToken' => $exchangeToken,
                    'assetToken' => $assetToken,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                if ($insert) {
                    echo "Inserted";
                } else {
                    echo "Not Inserted";
                }
            }
        }
    }

    public function updatelotsize()
    {
        // fetch data from https://service.upstox.com/instrument/v1/instruments?instrumentKeys=NSE_FO|42523&pageNo=1&pageSize=1
        $getSymbol = DB::table('future_temp')->where('lotSize', null)->where('exchange', 'NSE')->where('assetType', 'EQUITY')->where('instrumentType', 'FUT')->get('instrumentKey');
        // $i = 1;
        foreach ($getSymbol as $symbol) {
            // return $symbol->instrumentKey;
            $url = "https://service.upstox.com/instrument/v1/instruments?instrumentKeys=" . $symbol->instrumentKey . "&pageNo=1&pageSize=1";
            $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; utm_referer=https%3A%2F%2Fwww.google.co.in%2F; profile_id_web=8576772; _ga_CLCPGTZJXV=GS1.1.1737227250.35.0.1737227250.60.0.0; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _gid=GA1.2.731053221.1737227251; _ga=GA1.1.708249857.1730892005; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiI2MzY5YzMwYzE0YTQ2MzhmMmRhZTk1NzYxM2U1ZDQ0MSIsImV4cCI6MTczNzg5MjEwM30.AOUAe0yeO-ccacZt8dIGjXRCb1Nwzo8ayhrpaoFvino; auth_identity_token_expiry=1737892102059; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiRl9tTEZ1RzBkYVJzbHpRTGthNmY0dEpQTVZZIiwiaWF0IjoxNzM3Mjg3MzA2LCJleHAiOjE3MzczNzM3MDYsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoiSXR4YnItdWhBRXJ3MU1vTlJvOUEyeXB5cUJvIiwicmVmcmVzaF90b2tlbl9pZCI6IkZfbUxGdUcwZGFSc2x6UUxrYTZmNHRKUE1WWSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.YlF4GvgwAEgfcFANpMEBhcIVbtlHGAsSdfRQP_Pn9WrSCZsZ-CGg8tg5xbCIawIc9gIoPfycV7RnMZoxxA24CJH1PieRWR6xJyYboHz5ZWxgYaBVJxDwUmv-vvkPFx6qQ5ovOgyIU9l84R6AGxh3M8UlhDHDcjx00PjqIRC2pAYWHC50MnU44LqSqqe81LrTWX6-3pq0DjMEvJOdMvEg3zqssdIs6SoiUPz47_vElM6-50LIBLseoRd4j0rI6In3tl1-OVhzPos7jVsDP80j2PnW1DzMxDzWdr4cWWFShJTmo_70o8_6C9Z0lp0VmxqzuzArCoGHmY8x2mHB6F1HsQ; user_id=3KBR58; __cfruid=111fdb097979e975d011effe8b67fbd8e786e87f-1737305824; _cfuvid=1cQa32N1HrqVD_HHWrF2rUZrN7aWK8h8M6055PCFJMc-1737305825008-0.0.1.1-604800000; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiOWFjd2V1b1dXZzN3YTZtRDNNTmJDR3F1NmRZIiwiaWF0IjoxNzM3MzExMTg2LCJleHAiOjE3MzczMTQ3ODYsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6IkZfbUxGdUcwZGFSc2x6UUxrYTZmNHRKUE1WWSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.eFRBLWIa1f4J183MvII_tjr5iPGSGpJyKS8PkBhBEuZjhA6mkfS09n2pYkAADQZArGjs9X0Owjmrmif7WEUAxzgcG0gZj-GeqWmyAKBGQtXSTpTKXKdepBF2VFzvO2BqXuao7m6wkue1K7UbsO5nwIsRdCtK-zbUvHvsl1yOz2ZoUsHXkuHg-g7V34ZFmHcA3jHuctp77EbV03dcYBsSZJfIUYKUiDYe1-PP83cdtadbdAuOiF1DFrSIUkli9rUjk7LIZhAgqFzup3V8vGI0EKbnsuwI6DJMaIWneGnBZ12LDuiPKzQJ217lyTevrRm1OKqKnzwWPQzZ0p3GbxU9Gw; __cf_bm=vnCJlBvxHLFt2lKIgYIA8quYpGxh6_.LxGdMooc8LFM-1737311186-1.0.1.1-tHuzSkYypO2GNDdEih.AJwhTcWpeVuegEQAkgVVcQXN9p48_De3ZyRLaugUBdHPN; _ga_RLJ6WSLNCC=GS1.1.1737311281.28.0.1737311281.0.0.0; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%22194714d1858a55585-006c1d9f50fd13-26011851-9e793-194714d1858a55585%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%7D; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A1%2C%22s%22%3A1737311283%2C%22t%22%3A1737311284%7D";
            $response = Http::withHeaders([
                'cookie' => $cookie,
            ])->get($url);
            $data = $response->json();
            // return $data;
            // if $data['data']['instrumentList'][0] not set then continue
            if (!isset($data['data']['instrumentList'][0])) {
                continue;
            }
            if ($data['data']['instrumentList'][0]['lotSize'] != null) {
                $lotSize = $data['data']['instrumentList'][0]['lotSize'];
                $update = DB::table('future_temp')->where('instrumentKey', $symbol->instrumentKey)->update([
                    'lotSize' => $lotSize
                ]);
                if ($update) {
                    echo "Updated ";
                } else {
                    echo "Not Updated ";
                }
            }
        }
    }


    public function quotes()
    {




        return view('quote');
    }


    public function stockDetails($id){
        $stock = DB::table('future_temp')->where('instrumentKey', $id)->first();
        return view('stockDetails', compact('stock'));
    }
}
