<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index(){
        return view('frontend.matches.index');
    }

    public function getMatches($type){
        $response = cricketAPI("/matches/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
