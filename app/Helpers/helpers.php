<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('cricketAPI')) {
    function cricketAPI($url)
    {
        $response = Http::withHeaders([
            "X-RapidAPI-Host" => env("CRICKET_HOST", null),
            "X-RapidAPI-Key" => env("CRICKET_API_KEY", null),
        ])->get(env("CRICKET_ENDPOINT", null).$url);
        
        return $response;
       
    }
}

if (!function_exists('getImage')) {
    function getImage($id)
    {
        $response = Http::withHeaders([
            "X-RapidAPI-Host" => env("CRICKET_HOST", null),
            "X-RapidAPI-Key" => env("CRICKET_API_KEY", null),
        ])->get(env("CRICKET_ENDPOINT", null).'/img/v1/i1/c'.$id.'/i.jpg');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return "";
        }
    }
}