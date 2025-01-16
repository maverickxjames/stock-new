<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    public function fetchStockData($id)
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
        $url = "https://service.upstox.com/charts/v2/open/" . $stocktype . "/IN/NSE_EQ%7C" . $id . "/1minute/" . $cu . "/";

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

    public function updateFuture()
    {
        // fetch symbol list from db
        $equities = DB::table('equities')->get();
        foreach ($equities as $equity) {
            $symbol = $equity->symbol;

            if($equity->id < 21){
                continue;
            }
        // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=aubank&records=90&segments=FUT"; 
        $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=".$symbol."&records=500&segments=OPT";
        $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; profile_id_web=8576772; auth_identity_token_expiry=1737616632150; utm_referer=https%3A%2F%2Fwww.google.co.in%2F; _gid=GA1.2.2103172375.1737044348; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga_CLCPGTZJXV=GS1.1.1737053821.33.1.1737055642.60.0.0; _ga=GA1.1.708249857.1730892005; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiSGlZSmlDRWpmclpQbWRoempib2phOUtfS0U4IiwiaWF0IjoxNzM3MDU2ODMwLCJleHAiOjE3MzcwNjA0MzAsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6Ikd0bFR2ZERvWGhMUm80cmd2SW1kcm5wa0NobyIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.d4SO7ptnpmhNCYoTpkrtSL7kCdPMQ4equoUrUXDrN0z1MICV0gPaVXp3ojdEMmC2153eiyO7VaeF4r2UV9NnklKYLwE1Y7AAO0qLuMmgMaFR_tooU9jHURYGJUbYgn0Wg5eL0ZSNxvI_hiFmd55dv4clKJfnEXpUUtxFOeIRh6FinnZYajcxbwX8FsEiR6yYf1QDBmlSgmLsijoBoy_EcDkl4mSx_2CWMexPNvDg7jORta6DvOqa69k_Rgo4glEx8GmyovWxp5g6cXUnVSN9OtM4jZ_nMFSR1_rT6YW99u4vwl3U-ZfWHaLFLIbrixRuIrf2-sFAt98ekdWfdGkR4g; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiR3RsVHZkRG9YaExSbzRyZ3ZJbWRybnBrQ2hvIiwiaWF0IjoxNzM3MDU2ODMwLCJleHAiOjE3MzcxNDMyMzAsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoiSGlZSmlDRWpmclpQbWRoempib2phOUtfS0U4IiwicmVmcmVzaF90b2tlbl9pZCI6Ikd0bFR2ZERvWGhMUm80cmd2SW1kcm5wa0NobyIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.bikrbOTQRdVMT6FStCFdIqqVCgmyv7AmQXUPXYxuDldtcy3SsMijqW2GbtYHsWQ38R9pn2Ia1awZ9cpXUMzjv9sGrAfXzevL0n1-PuEBivCr5qmxoLmsN2VBJ78Uj_ZwiRl0boj0wKItHdiJIk_CaCYtCuHjiWO4em_-u-AXmpWuKyr_IUpZX3qZIsu0GUGTmVyF0z2afV9JHdpmoNNlm4hdrXrDpmY8Uqjknrx7rs63DzmHvEPOP_PH_8FQvhyBofJAuZVreEWmpqEFtPvluIRDTWr9PKSsXo8qPkFzpQPIXxNJu58zkGkOpgYb3QjbyWVDVWKYj6sL0Stk1aydFA; user_id=3KBR58; customer_status=ACTIVE; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%2219470a01e41a0525-0f3032520b95c7-26011851-1fa400-19470a01e41a0525%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%7D; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A3%2C%22s%22%3A1737055678%2C%22t%22%3A1737056832%7D; _ga_RLJ6WSLNCC=GS1.1.1737055678.17.1.1737056832.0.0.0; __cf_bm=ei129p02oDlXxmORpkVxy_QR0nAJYkXdVNhsGDxGSKk-1737056843-1.0.1.1-XZL7SXzQOTXAigmLGkkKul.Hy62jjGRGuLQRZ8kwIdGGh0.wWXH5vFR.zK3_3_Iq; __cfruid=baa3986d938b5aef31186117682856a734aaa4a8-1737056843; _cfuvid=PTskZCUSJeCVy4BQ4dbbrgm5C6oBSAxF6v1yx1HtA.Q-1737056843449-0.0.1.1-604800000";
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

    public function getExpiry($id)
    {
        $scriptid = $id;
        $symbol = DB::table('equities')->where('id', $scriptid)->first();
        $fetchExpiry = DB::table('future_temp')->where('assetSymbol', $symbol->symbol)->get();
        return response()->json($fetchExpiry);
    }

    public function getStock($id)
    {
        if($id == 1){
            $data = DB::table('equities')
            ->where('exchange', 'NSE')
            ->orderBy('symbol', 'asc')
            ->get();

            return response()->json($data);
        }elseif($id == 2){
            $data = DB::table('equities')
            ->where('exchange', 'NSE')
            ->orderBy('symbol', 'asc')
            ->get();

            return response()->json($data);
        }elseif($id == 3){
        $data = DB::table('equities')
            ->where('exchange', 'MCX')
            ->orderBy('symbol', 'asc')
            ->get();

            return response()->json($data);
        }

    }
}
