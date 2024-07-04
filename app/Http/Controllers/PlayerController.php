<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(Request $request, $player_id){
        $response = cricketAPI("/stats/v1/player/".$player_id);
        $battingResponse = cricketAPI("/stats/v1/player/".$player_id ."/batting");
        $battingData = [];
        $data = [];
        if ($response->successful() || $battingResponse->successful()) {
            $battingData = $battingResponse->json();
            $data = $response->json();
            return view('frontend.players.details', compact('data', 'battingData'));
        }
        
        return view('frontend.players.details', compact('data','battingData'));
    }

    // public function showBatingCareer(Request $request, $player_id){
    //     $response = cricketAPI("/stats/v1/player/".$player_id ."/batting");
    //     $batData = [];
    //     if ($response->successful()) {
    //         $batData = $response->json();
    //         return view('frontend.players.details', compact('batData'));
    //     }
    //     return view('frontend.players.details', compact('batData'));
    // }

    // public function showBowlingCareer(Request $request, $player_id){
    //     $response = cricketAPI("/stats/v1/player/".$player_id ."/bowling");
    //     $bowlData = [];
    //     if ($response->successful()) {
    //         $bowlData = $response->json();
    //         return view('frontend.players.details', compact('bowlData'));
    //     }
    //     return view('frontend.players.details', compact('bowlData'));
    // }
}
