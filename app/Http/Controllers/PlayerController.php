<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show(Request $request, $player_id){
        $response = cricketAPI("/stats/v1/player/".$player_id);
        $data = [];
        if ($response->successful()) {
            $data = $response->json();
            return view('frontend.players.details', compact('data'));
        }
        return view('frontend.players.details', compact('data'));
    }
}
