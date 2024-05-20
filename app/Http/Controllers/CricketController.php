<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CricketController extends Controller
{
    public static function matches_schedules($type = 'international'){
        $response = cricketAPI("/schedule/v1/".$type);
        
        if ($response->successful()) {
            return $response->json();
        } else {
            return [];
        }
    }

}
