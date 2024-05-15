<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CricketController;
use App\Models\MatchHighlight;
use App\Models\Banner;


class HomeController extends Controller
{
    public function index(){
        $data = [];
        $data['schedule_matches'] = CricketController::matches_schedules();
        $data['video'] = MatchHighlight::where('status', 1)->get();
        $data['banners'] = Banner::where('status', 1)->get();

        return view('frontend.index', compact('data'));
    }
}
