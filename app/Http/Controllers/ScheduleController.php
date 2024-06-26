<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request){
        return view('frontend.schedule.index');
    }

    public function schedules($type = 'international'){
        $response = cricketAPI("/schedule/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function scheduleInfo(){
        return view('frontend.schedule.details');
    }

    public function scheduleMatchInfo(){
        return view('frontend.schedule.matchDetails');
    }
}
