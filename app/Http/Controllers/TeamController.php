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

    public function getSchedules(Request $request){
        $response = cricketAPI("/teams/v1/" . $request->teamId . '/schedule');
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getResults(Request $request){
        $response = cricketAPI("/teams/v1/" . $request->teamId . '/results');
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getNews(Request $request){
        $response = cricketAPI("/news/v1/team/" . $request->teamId);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getStats(Request $request){
        $response = cricketAPI("/stats/v1/team/" . $request->teamId);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
