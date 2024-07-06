<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(Request $request, $player_id){
        $response = cricketAPI("/stats/v1/player/".$player_id);
        $battingResponse = cricketAPI("/stats/v1/player/".$player_id ."/batting");
        $bowlingResponse = cricketAPI("/stats/v1/player/".$player_id ."/bowling");
        $careerResponse = cricketAPI("/stats/v1/player/".$player_id ."/career");
        $newsResponse = cricketAPI("/news/v1/player/".$player_id);
        $battingData = [];
        $bowlingData = [];
        $careerData =[];
        $newsData =[];
        $data = [];
        if ($response->successful() || $battingResponse->successful()) {
            $battingData = $battingResponse->json();
            $bowlingData = $bowlingResponse->json();
            $careerData = $careerResponse->json();
            $newsData = $newsResponse->json();
            $data = $response->json();
            return view('frontend.players.details', compact('data', 'battingData', 'bowlingData','careerData','newsData'));
        }
        
        return view('frontend.players.details', compact('data','battingData'));

    }

    }
