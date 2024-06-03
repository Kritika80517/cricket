<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request){
        return view('frontend.teams.index');
    }

    public function teams($type = 'international') {
        $response = cricketAPI("/teams/v1/" . $type);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function show(){
        return view('frontend.teams.details');
    }
}
