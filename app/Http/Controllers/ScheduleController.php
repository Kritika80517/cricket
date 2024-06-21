<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedules($type = 'international'){
        $response = cricketAPI("/schedule/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
