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

    public function getMatchesDetails($matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId);
        $matchInfo = [];
        if ($response->successful()) {
            $matchInfo = $response->json();
        }
        return view('frontend.matches.details', compact('matchInfo'));
    }

    public function matchInfo(Request $request, $matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId);
        $data = [];
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function matchCommentries(Request $request, $matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId.'/comm');
        $data = [];
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function matchCommentriesV2(Request $request, $matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId.'/hcomm');
        $data = [];
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function matchScard(Request $request, $matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId.'/scard');
        $data = [];
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function matchScardV2(Request $request, $matchId){
        $response = cricketAPI("/mcenter/v1/".$matchId.'/hscard');
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function matchTeams(Request $request, $matchId, $team_id){
        $response = cricketAPI("/mcenter/v1/".$matchId.'/team/'.$team_id);
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
