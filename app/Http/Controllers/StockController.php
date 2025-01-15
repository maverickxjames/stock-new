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
        // $equities = DB::table('equities')->get();
        // foreach ($equities as $equity) {
        //     $symbol = $equity->symbol;
        // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=aubank&records=90&segments=FUT"; 
        // $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=".$symbol."&records=30&segments=FUT";
        // $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJhOGY3ZTBkZjNjN2FkODcxOTViMDlhMjcyMmE1YTQ3OCIsImV4cCI6MTczNzI3MjQxM30.O6HlmlwrisWEN7wWa8rzQeajxBRyk9Z34yJHMbtmuik; profile_id_web=8576772; auth_identity_token_expiry=1737272412058; user_id=3KBR58; _gid=GA1.2.2127334796.1736679317; utm_referer=https%3A%2F%2Fupstox.com%2F; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoieGZpaE56V0NZYTNUWXBTajczTkJSamZRY2ZZIiwiaWF0IjoxNzM2Njc5OTczLCJleHAiOjE3MzY3NjYzNzMsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoidEVWVVkwYmcwdmhBb2pBRDk4bGo5SnJuUFBzIiwicmVmcmVzaF90b2tlbl9pZCI6InhmaWhOeldDWWEzVFlwU2o3M05CUmpmUWNmWSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.c5bOU6U0mIMDJPnYzlxEAmM-kw2AyH3oQDDI5nLaCxtqWbQYD7cave_YqvYAA0RsfChNPEnzDHItfaH1HY6n1lBdcCZcVFnRGsx9yDWQBnhbLjhoWdddnANU_R3xwQdQmfKfUyBINirUvw4MDm-jPKEDSnvyBsrqB6C4Cxq7ZBsabAeUjzhXTCJzIIQUbJchJf34hn-sS1IewKIepo0Bl-VsW07PaMm_HJ7UYmC7Uf1u_oQmnkdUPVLrq83FUAs661c1ZSS7-xfkgtLJ47xDFMo9K8taamVoQOgzdK6T6a5gasHq_wlQ67HMUCPSFNpWCRmMcN1GZOwsVANBgJZmPA; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga=GA1.1.708249857.1730892005; _ga_CLCPGTZJXV=GS1.1.1736679316.28.1.1736680129.60.0.0; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiLXhqUVFlcnhDcG1KYkd3eFhEaU9HczFDSG44IiwiaWF0IjoxNzM2NzAxNTQwLCJleHAiOjE3MzY3MDUxNDAsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6InhmaWhOeldDWWEzVFlwU2o3M05CUmpmUWNmWSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.eiMCiPdXRcGzHaDpoI3fmNYU1YuZA22jdYQtoAjPmVVcMx2BH3_BmHEM6Ss6ZFDrmK8yypH9hJkw5T-Liwi6DIuSnh_47Q3bSz41XyWpqRoayjMDnJlJpVPxBM3OSbboKIYjajQaJYEFebR2cvEf8PXkctu9ARurHWx5P3AjSa41ITJ54DJ5bYqHEZmaUY8n8a3nXl8OeESt25YDkhSMXKkNsb5O2SNe8TixeMBxpph8I9pqcX1n8gy2YMQ3JaXx1R4_nIgxcQUiNcsRDfvJ2PQm_qdnfqXBtmKzxkx_Ki_YQsGTykURnJptlMHIURo2OAlKT7y6w37pwbpBCFyjmw; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%22193a3b3c1a41c4782a-04340ab83d6f1b-26011851-1fa400-193a3b3c1a41c4782a%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%2C%22%24search_engine%22%3A%20%22google%22%7D; __cfruid=9258d6007b4f333059dc282020824d1861033bff-1736703368; WZRK_S_88W-7Z6-676Z=%7B%22p%22%3A1%2C%22s%22%3A1736703370%2C%22t%22%3A1736703371%7D; __cf_bm=HaT2sE6Ku3JOkVTsg84UcuRrAVbZriwcrOGOR2z0vy4-1736703372-1.0.1.1-zwmyLcLv7eMipSsMnGEh3Co0Tp97JJpu13Ld_P_wTnClk.zBZvVJTgFMAw7Rao17; _cfuvid=3WGyp5UQ93lR3oV1pf1VzP459KdHpdOIcTj1ZAlMRw8-1736703372487-0.0.1.1-604800000; _ga_RLJ6WSLNCC=GS1.1.1736703358.13.1.1736703374.0.0.0";
        // $response = Http::withHeaders([
        //     'cookie' => $cookie,
        // ])->get($url);
        // $data = $response->json();
        // $fetchList =  $data['data'];

        $url = "https://service.upstox.com/search/v1?allValuesFor=expiry&pageNumber=1&query=MCX&records=150&segments=FUT";
        $cookie = "_gcl_au=1.1.662695127.1730892004; _fbp=fb.1.1730892007537.49372314893510933; _iidt=8mXkcbwq/wf3caPvJsDaHYCEaYdBVGLmvjb/g6s2Dd1gvCkPZBgIjKQVbUwxCoF+EdWIoU/D+xwq3w==; _vid_t=DiC0jCgNOR8n4qEJBBZCiWV1fIO5jJNaDZeScqGkeJv7OrE8BHbzIL1kwZKiXIcftqfTpXwcrJLSMg==; mp_2e2b86aca136ef277fac607c86dc6b74_mixpanel=%7B%22distinct_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24device_id%22%3A%20%221937cdfc7f4161da-0c382bddaffd7c-26011851-1fa400-1937cdfc7f4161da%22%2C%22%24user_id%22%3A%20%22diW5wNWYmS5ShXfU3OAm%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%7D; WZRK_G=244dfebba9214c3aa5268130314686d1; auth_identity_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiJhOGY3ZTBkZjNjN2FkODcxOTViMDlhMjcyMmE1YTQ3OCIsImV4cCI6MTczNzI3MjQxM30.O6HlmlwrisWEN7wWa8rzQeajxBRyk9Z34yJHMbtmuik; profile_id_web=8576772; auth_identity_token_expiry=1737272412058; user_id=3KBR58; _gid=GA1.2.2127334796.1736679317; utm_referer=https%3A%2F%2Fupstox.com%2F; refresh_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoieGZpaE56V0NZYTNUWXBTajczTkJSamZRY2ZZIiwiaWF0IjoxNzM2Njc5OTczLCJleHAiOjE3MzY3NjYzNzMsImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYXRpIjoidEVWVVkwYmcwdmhBb2pBRDk4bGo5SnJuUFBzIiwicmVmcmVzaF90b2tlbl9pZCI6InhmaWhOeldDWWEzVFlwU2o3M05CUmpmUWNmWSIsInR5cGUiOiJyZWZyZXNoX3Rva2VuIiwicm9sZSI6IkNVU1RPTUVSIiwidXNlcl90eXBlIjoiQ1VTVE9NRVIiLCJ1c2VyX2lkIjoiM0tCUjU4IiwidmVyc2lvbiI6IlYyIiwic3RwIjoiT01TMyJ9.c5bOU6U0mIMDJPnYzlxEAmM-kw2AyH3oQDDI5nLaCxtqWbQYD7cave_YqvYAA0RsfChNPEnzDHItfaH1HY6n1lBdcCZcVFnRGsx9yDWQBnhbLjhoWdddnANU_R3xwQdQmfKfUyBINirUvw4MDm-jPKEDSnvyBsrqB6C4Cxq7ZBsabAeUjzhXTCJzIIQUbJchJf34hn-sS1IewKIepo0Bl-VsW07PaMm_HJ7UYmC7Uf1u_oQmnkdUPVLrq83FUAs661c1ZSS7-xfkgtLJ47xDFMo9K8taamVoQOgzdK6T6a5gasHq_wlQ67HMUCPSFNpWCRmMcN1GZOwsVANBgJZmPA; _rdt_uuid=1731745763676.461ef494-e46b-48d4-9391-32fa95d774f3; _ga=GA1.1.708249857.1730892005; _ga_CLCPGTZJXV=GS1.1.1736679316.28.1.1736680129.60.0.0; __cfruid=fbb9a771b015a96d44393f33f85f5b560ec9b3c9-1736703443; _cfuvid=.5GCmBwgg7QwQSsrHvseNbwusYTGML2XLC3UkPCd1lo-1736703443469-0.0.1.1-604800000; mp_62597aa51842e6e2c56b97d96e4c5f8a_mixpanel=%7B%22distinct_id%22%3A%20%228576772%22%2C%22%24device_id%22%3A%20%22193a3b3c1a41c4782a-04340ab83d6f1b-26011851-1fa400-193a3b3c1a41c4782a%22%2C%22%24initial_referrer%22%3A%20%22https%3A%2F%2Fpro.upstox.com%2F%22%2C%22%24initial_referring_domain%22%3A%20%22pro.upstox.com%22%2C%22__mps%22%3A%20%7B%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%2C%22%24user_id%22%3A%20%228576772%22%2C%22Platform%22%3A%20%22ProWeb3%22%2C%22%24search_engine%22%3A%20%22google%22%7D; _ga_RLJ6WSLNCC=GS1.1.1736706397.14.1.1736706402.0.0.0; __cf_bm=IjEkNWAjWS2S7ywEOIUU5VSlW9S9aubYSgmdpqufMB8-1736712443-1.0.1.1-blpz41q12XD96Msr0Iw3ynj_knQxOA2pNZ7mRetGyj6YUKVJHCgWAQXUNTNUQ0nO; access_token=eyJ0eXAiOiJKV1QiLCJraWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwiYWxnIjoiUlMyNTYifQ.eyJzdWIiOiI4NTc2NzcyIiwianRpIjoiWU9UendxaWx4Tkl0VG9KUzltWHQxeFpwRXRrIiwiaWF0IjoxNzM2NzEyNzI5LCJleHAiOjE3MzY3MTYzMjksImlzcyI6ImxvZ2luLXNlcnZpY2UiLCJzY29wZSI6W10sImNsaWVudF9pZCI6IlBXMy02QWdkMzdQQjUyUTZCNkREcFlXTHVUN2IiLCJrZXlfaWQiOiJpZHQtODAxYzAxZmEtOWRmNy00YjMyLThjZmItNzE2MzgxZjQ0YzAxIiwicmVmcmVzaF90b2tlbl9pZCI6InhmaWhOeldDWWEzVFlwU2o3M05CUmpmUWNmWSIsInR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJyb2xlIjoiQ1VTVE9NRVIiLCJ1c2VyX3R5cGUiOiJDVVNUT01FUiIsInVzZXJfaWQiOiIzS0JSNTgiLCJ2ZXJzaW9uIjoiVjIiLCJzdHAiOiJPTVMzIn0.Pji4EEjHdrFahDNvhNbdMPf98zabHhEIgNgB7DNtwOYnelI4q1AxrFulC5WQGSoL04BQMl4y9h_QOEXfY_RC9c1VaYwS3usVTvYorAcYPl8VNeBOpJMBT3qbawU-8Fd_VmbyFWU4-NCurvvuAoQE27sXAYTJxiLIlOg-l0S22f-WVrnoV_ad95z1Leb8sKuVPDwHZp0A7--t4R4pLn1wfUxYQQzJCIEojvX0y8n4tKjW3d4BYF9W3q2UXkrdz8i2YWiM57n2XM6wJ7m-6FQ9RLvj4PBoFTyJyYWpHxaIssPqp6skDRhJVxwkyBV5ceq_NMMIYXzSr3_3HWLyTMwT-g";
        $response = Http::withHeaders([
            'cookie' => $cookie,
        ])->get($url);
        $data = $response->json();




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
        // }
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
