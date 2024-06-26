<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CricketController;
use App\Models\MatchHighlight;
use App\Models\Banner;
use App\Models\Ads;


class HomeController extends Controller
{
    public function index(){
        $data = [];
        // $data['schedule_matches'] = CricketController::matches_schedules();
        $data['video'] = MatchHighlight::where('status', 1)->get();
        $data['banners'] = Banner::where('status', 1)->get();
        $data['ads'] = Ads::where('status', 1)->get();
        return view('frontend.index', compact('data'));
    }

    public function homePlayerPoint() {
        $response = cricketAPI("/stats/v1/rankings/batsmen?formatType=test");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function homeMatches() {
        $response = cricketAPI("/matches/v1/upcoming");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
