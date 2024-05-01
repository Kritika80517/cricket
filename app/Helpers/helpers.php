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