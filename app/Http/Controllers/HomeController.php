<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CricketController;

class HomeController extends Controller
{
    public function index(){
        $data = [];
        $data['schedule_matches'] = CricketController::matches_schedules();

        return view('frontend.index', compact('data'));
    }
}
