<?php

namespace App\Services;

use GuzzleHttp\Client;
use function Amp\Websocket\Client\connect;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;
use Com\Upstox\Marketdatafeeder\Rpc\Proto\FeedResponse;
use Illuminate\Support\Facades\DB;
use App\Jobs\UpdateLTPJob;
use App\Jobs\ValidateLtpc;
use App\Jobs\CheckLimitOrdersJob;
use Illuminate\Support\Facades\Queue;

class MarketDataService
{
    /**
     * Decode Protobuf messages.
     */
    private function decodeProtobuf($buffer)
    {
        $feedResponse = new FeedResponse();

        if ($buffer !== null && $buffer !== '') {
            $feedResponse->mergeFromString($buffer);
        } else {
            echo "Warning: Buffer is null or empty.\n";
        }

        return $feedResponse;
    }

    /**
     * Get market data feed authorization.
     */
    private function getMarketDataFeedAuthorize($apiVersion, $configuration)
    {
        $apiInstance = new WebsocketApi(
            new Client(),
            $configuration
        );
        return $apiInstance->getMarketDataFeedAuthorize($apiVersion);
    }

    public function connectWebSocket()
    {
        $apiVersion = '2.0';
        $accessToken = env('UPSTOX_ACCESS_TOKEN');

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->setAccessToken($accessToken);

        $response = $this->getMarketDataFeedAuthorize($apiVersion, $configuration);
        $connection = connect($response['data']['authorized_redirect_uri']);

        return $connection;
    }

    /**
     * Fetch market updates.
     */
    public function fetchMarketUpdates()
    {

        $apiVersion = '2.0';
        $accessToken = DB::table('upstocks')->where('id', 1)->value('token');

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->setAccessToken($accessToken);

        $response = $this->getMarketDataFeedAuthorize($apiVersion, $configuration);
        $connection = connect($response['data']['authorized_redirect_uri']);

        echo "Connection successful!\n";

        $nsefo = DB::table('watchlist')
            ->select('instrumentKey') // Select only the 'exchangeToken' column
            ->distinct()
            ->get();                  // Retrieve the data

        // Convert the collection to an array of 'exchangeToken' values
        $tokens = $nsefo->pluck('instrumentKey')->toArray();


        // Prepare the final array
        $finalArray = ["instrumentKeys" => $tokens];

        $data = [
            "guid" => "someguid",
            "method" => "sub",
            "data" => [
                "mode" => "full",
                // "instrumentKeys" => ["NSE_FO|35674"]
                "instrumentKeys" => $finalArray['instrumentKeys']
            ]
        ];

        $binaryData = json_encode($data);
        $connection->sendBinary($binaryData);

        foreach ($connection as $message) {
            $payload = $message->buffer();

            if ($payload === '100') {
                $connection->close();
                break;
            }

            if (!empty($payload)) {
                $decodedData = $this->decodeProtobuf($payload);
                $apidata = $decodedData->serializeToJsonString();

                $data2 = json_decode($apidata, true);

                var_dump($data2);
                
                UpdateLTPJob::dispatch($data2);
                // Broadcast the processed data to the client
                broadcast(new \App\Events\Watchlist($data2))->toOthers();
            }
        }
    }
    public function fetchTradeUpdates()
    {

        $apiVersion = '2.0';
        $accessToken = DB::table('upstocks')->where('id', 1)->value('token');

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->setAccessToken($accessToken);

        $response = $this->getMarketDataFeedAuthorize($apiVersion, $configuration);
        $connection = connect($response['data']['authorized_redirect_uri']);

        echo "Connection successful!\n";

        $nsefo = DB::table('trades')
            ->select('instrumentKey') // Select only the 'exchangeToken' column
            ->distinct()              // Ensure the results are distinct
            ->get();                  // Retrieve the data

        // Convert the collection to an array of 'exchangeToken' values
        $tokens = $nsefo->pluck('instrumentKey')->toArray();


        // Prepare the final array
        $finalArray = ["instrumentKeys" => $tokens];

        $data = [
            "guid" => "someguid",
            "method" => "sub",
            "data" => [
                "mode" => "full",
                // "instrumentKeys" => ["NSE_FO|35674"]
                "instrumentKeys" => $finalArray['instrumentKeys']
            ]
        ];

        $binaryData = json_encode($data);
        $connection->sendBinary($binaryData);

        foreach ($connection as $message) {
            $payload = $message->buffer();

            if ($payload === '100') {
                $connection->close();
                break;
            }

            if (!empty($payload)) {
                $decodedData = $this->decodeProtobuf($payload);
                $apidata = $decodedData->serializeToJsonString();

                $data2 = json_decode($apidata, true);
                // var_dump($data2);

                // Broadcast the processed data to the client
                broadcast(new \App\Events\Trade($data2))->toOthers();
            }
        }
    }
    public function fetchStocksUpdates()
    {

        $apiVersion = '2.0';
        $accessToken = DB::table('upstocks')->where('id', 1)->value('token');

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->setAccessToken($accessToken);

        $response = $this->getMarketDataFeedAuthorize($apiVersion, $configuration);
        $connection = connect($response['data']['authorized_redirect_uri']);

        echo "Connection successful!\n";
       

        $tokens=["BSE_INDEX|SENSEX","NSE_INDEX|Nifty 50","NSE_INDEX|Nifty Next 50","NSE_INDEX|Nifty Bank","NSE_INDEX|NIFTY MID SELECT","NSE_INDEX|Nifty Fin Service","BSE_INDEX|SENSEX50","BSE_INDEX|BANKEX"];
        // $toekns=["BSE_INDEX|SENSEX","NSE_INDEX|NIFTY 50","NSE_INDEX|NIFTY BANK","NSE_INDEX|NIFTY AUTO","NSE_INDEX|NIFTY IT","NSE_INDEX|NIFTY PHARMA","NSE_INDEX|NIFTY FMCG","NSE_INDEX|NIFTY METAL","NSE_INDEX|NIFTY PSU BANK","NSE_INDEX|NIFTY REALTY","NSE_INDEX|NIFTY MEDIA","NSE_INDEX|NIFTY ENERGY","NSE_INDEX|NIFTY INFRA","NSE_INDEX|NIFTY PVT BANK","NSE_INDEX|NIFTY COMMODITIES","NSE_INDEX|NIFTY CONSUMPTION","NSE_INDEX|NIFTY CPSE","NSE_INDEX|NIFTY DIV OPPS 50","NSE_INDEX|NIFTY GROWSECT 15","NSE_INDEX|NIFTY50 VALUE 20","NSE_INDEX|NIFTY50 TR 2X LEV","NSE_INDEX|NIFTY50 TR 1X INV","NSE_INDEX|NIFTY50 PR 2X LEV","NSE_INDEX|NIFTY50 PR 1X INV","NSE_INDEX|NIFTY50 DIV POINT","NSE_INDEX|NIFTY50 PR 1X INV","NSE_INDEX|NIFTY50 PR 2X LEV","NSE_INDEX|NIFTY50 TR 1X INV","NSE_INDEX|NIFTY50 TR 2X LEV","NSE_INDEX|NIFTY50 VALUE 20","NSE_INDEX|NIFTY GROWSECT 15","NSE_INDEX|NIFTY DIV OPPS 50","NSE_INDEX|NIFTY CPSE","NSE_INDEX|NIFTY CONSUMPTION","NSE_INDEX|NIFTY COMMODITIES","NSE_INDEX|NIFTY PVT BANK","NSE_INDEX|NIFTY INFRA","NSE_INDEX|NIFTY ENERGY","NSE_INDEX|NIFTY MEDIA","NSE_INDEX|NIFTY REALTY","NSE_INDEX|NIFTY PSU BANK","NSE_INDEX|NIFTY METAL","NSE_INDEX|NIFTY FMCG","NSE_INDEX|NIFTY PHARMA","NSE_INDEX|NIFTY IT","NSE_INDEX|NIFTY AUTO","NSE_INDEX|NIFTY BANK","NSE_INDEX|NIFTY 50","BSE_INDEX|SENSEX"];


        // Prepare the final array
        $finalArray = ["instrumentKeys" => $tokens];

        $data = [
            "guid" => "someguid",
            "method" => "sub",
            "data" => [
                "mode" => "full",
                // "instrumentKeys" => ["NSE_FO|35674"]
                "instrumentKeys" => $finalArray['instrumentKeys']
            ]
        ];



        $binaryData = json_encode($data);
        $connection->sendBinary($binaryData);

        foreach ($connection as $message) {
            $payload = $message->buffer();

            if ($payload === '100') {
                $connection->close();
                break;
            }

            if (!empty($payload)) {
                $decodedData = $this->decodeProtobuf($payload);
                $apidata = $decodedData->serializeToJsonString();

                $data2 = json_decode($apidata, true);
                // var_dump($data2);

                UpdateLTPJob::dispatch($data2);
                // Broadcast the processed data to the client
                broadcast(new \App\Events\Stock($data2))->toOthers();
            }
        }
    }
    public function fetchTradeOnlyLtp()
    {

        $apiVersion = '2.0';
        $accessToken = DB::table('upstocks')->where('id', 1)->value('token');

        $configuration = Configuration::getDefaultConfiguration();
        $configuration->setAccessToken($accessToken);

        $response = $this->getMarketDataFeedAuthorize($apiVersion, $configuration);
        $connection = connect($response['data']['authorized_redirect_uri']);

        echo "Connection successful!\n";
       

        $nsefo = DB::table('trades')
        ->select('instrumentKey') // Select only the 'exchangeToken' column
        ->distinct()              // Ensure the results are distinct
        ->get();                  // Retrieve the data

    // Convert the collection to an array of 'exchangeToken' values
        $tokens = $nsefo->pluck('instrumentKey')->toArray();

        // Prepare the final array
        $finalArray = ["instrumentKeys" => $tokens];

        $data = [
            "guid" => "someguid",
            "method" => "sub",
            "data" => [
                "mode" => "ltpc",
                // "instrumentKeys" => ["NSE_FO|35674"]
                "instrumentKeys" => $finalArray['instrumentKeys']
            ]
        ];



        $binaryData = json_encode($data);
        $connection->sendBinary($binaryData);

        foreach ($connection as $message) {
            $payload = $message->buffer();

            if ($payload === '100') {
                $connection->close();
                break;
            }

            if (!empty($payload)) {
                $decodedData = $this->decodeProtobuf($payload);
                $apidata = $decodedData->serializeToJsonString();

                $data2 = json_decode($apidata, true);
                // var_dump($data2);
                ValidateLtpc::dispatch($data2);
                CheckLimitOrdersJob::dispatch($data2);
               

                // UpdateLTPJob::dispatch($data2);
                // // Broadcast the processed data to the client
                // broadcast(new \App\Events\Stock($data2))->toOthers();
            }
        }
    }
}
