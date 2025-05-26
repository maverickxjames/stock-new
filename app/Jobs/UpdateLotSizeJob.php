<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UpdateLotSizeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $getSymbol = DB::table('future_temp')
            ->where('lotSize', 0)
            ->get(['instrumentKey']);

            $cookie = DB::table('upstocks')->where('id', 1)->value('cookie');

            Log::info("Cookie fetched: " . $cookie);

        foreach ($getSymbol as $symbol) {
            $url = "https://service.upstox.com/instrument/v1/instruments?instrumentKeys=" . $symbol->instrumentKey . "&pageNo=1&pageSize=1";
            // $cookie = "access_token=your_access_token"; // Replace with a valid token

            $response = Http::withHeaders([
                'cookie' => $cookie,
            ])->get($url);

            $data = $response->json();
            // log here 

            Log::info("Fetching lot size for instrumentKey: " . $symbol->instrumentKey, ['response' => $data]);

           

            if (!isset($data['data']['instrumentList'][0])) {
                continue;
            }

            if ($data['data']['instrumentList'][0]['lotSize'] != null) {
                $lotSize = $data['data']['instrumentList'][0]['lotSize'];
                
                
                $updated = DB::table('future_temp')
                    ->where('instrumentKey', $symbol->instrumentKey)
                    ->update(['lotSize' => DB::raw($lotSize)]);
                    

                if ($updated) {
                    
                    DB::table('lot_size_updates')->insert([
                        'instrumentKey' => $symbol->instrumentKey,
                        'lotSize' => $lotSize,
                        'status' => 'completed',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                    Log::info("Lot size updated for instrumentKey: " . $symbol->instrumentKey);
                } else {
                    DB::table('lot_size_updates')->insert([
                        'instrumentKey' => $symbol->instrumentKey,
                        'lotSize' => $lotSize,
                        'status' => 'failed',
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                    Log::warning("Failed to update lot size for instrumentKey: " . $symbol->instrumentKey);
                }
            }
        }
    }
}
