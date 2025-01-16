<?php

namespace App\Services;

use GuzzleHttp\Client;
use function Amp\Websocket\Client\connect;
use Upstox\Client\Configuration;
use Upstox\Client\Api\WebsocketApi;
use Com\Upstox\Marketdatafeeder\Rpc\Proto\FeedResponse;
use Illuminate\Support\Facades\DB;

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

    public function connectWebSocket(){
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
        ->select('exchangeToken') // Select only the 'exchangeToken' column
        ->distinct()              // Ensure the results are distinct
        ->get();                  // Retrieve the data

    // Convert the collection to an array of 'exchangeToken' values
    $tokens = $nsefo->pluck('exchangeToken')->toArray();

    // Map each token to the required format
    $instrumentKeys = array_map(function ($token) {
        return "NSE_FO|" . $token;
    }, $tokens);

    // Prepare the final array
    $finalArray = ["instrumentKeys" => $instrumentKeys];

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

                // Broadcast the processed data to the client
                broadcast(new \App\Events\Watchlist($data2))->toOthers();
            }
        }

    }
}
