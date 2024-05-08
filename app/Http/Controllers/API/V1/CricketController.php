<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CricketController extends Controller
{
    private $API_KEY, $ENDPOINT, $HOST;
    public function __construct() {
        $this->API_KEY = env("CRICKET_API_KEY", null);
        $this->ENDPOINT = env("CRICKET_ENDPOINT", null);
        $this->HOST = env("CRICKET_HOST", null);
    }

    // matches apis
    public function matches_list(Request $request){
        $type = 'recent';
        if(request()->has('type')){
            $type = $request->type;
        }
        $response = cricketAPI("/matches/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_info(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
        
    }

    public function matches_team(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. $request->teamId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
        
    }

    public function matches_commentaries(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/comm');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_commentaries_v2(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/hcomm');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_overs(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/overs');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_scorecard(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/scard');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_scorecard_v2(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/hscard');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matches_leanback(Request $request){
        $response = cricketAPI("/mcenter/v1/" . $request->matchId. '/leanback');
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function matche_schedule(Request $request){
        $type = 'league';
        if(request()->has('type')){
            $type = $request->type;
        }
        $response = cricketAPI("/schedule/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    // series apis
    public function series_list(Request $request){
        $type = 'league';
        if(request()->has('type')){
            $type = $request->type;
        }
        $response = cricketAPI("/series/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_list_archives(Request $request){
        $type = 'league';
        if(request()->has('type')){
            $type = $request->type;
        }
        $response = cricketAPI("/series/v1/archives/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_matches(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/series/v1/".$seriesId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_news(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/news/v1/series/".$seriesId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }
   
    public function series_squads(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/series/v1/".$seriesId ."/squads");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_players(Request $request){
        if($request->has('seriesId','squadId')){
            $seriesId = $request->seriesId;
            $squadId = $request->squadId;
        }
        $response = cricketAPI("/series/v1/".$seriesId."/squads/".$squadId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }
    
    public function series_venues(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/series/v1/".$seriesId ."/venues");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_points_table(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/stats/v1/series/".$seriesId ."/points-table");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_stats_filters(Request $request){
        if(request()->has('seriesId')){
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/stats/v1/series/".$seriesId );
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function series_stats(Request $request){
        if($request->has('statsType','seriesId')){
            $statsType = $request->statsType;
            $seriesId = $request->seriesId;
        }
        $response = cricketAPI("/stats/v1/series/".$seriesId."/statsType/".$statsType);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }
    
    // team apis
    public function team_list(Request $request){
        $type = 'international';
        if(request()->has('type')){
            $type = $request->type;
        }
        $response = cricketAPI("/teams/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function team_schedule(Request $request){
        $teamId = 2; 
        if($request->has('teamId')){
            $teamId = $request->teamId;
        }
        $response = cricketAPI("/teams/v1/".$teamId."/schedule");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }
    
    public function team_results(Request $request){
        $teamId = 2; 
        if($request->has('teamId')){
            $teamId = $request->teamId;
        }
        $response = cricketAPI("/teams/v1/".$teamId."/results");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function team_news(Request $request){
        $teamId = 2; 
        if($request->has('teamId')){
            $teamId = $request->teamId;
        }
        $response = cricketAPI("/news/v1/team/".$teamId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function team_players(Request $request){
        $teamId = 2; 
        if($request->has('teamId')){
            $teamId = $request->teamId;
        }
        $response = cricketAPI("/teams/v1/".$teamId. "/players");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function team_stats_filters(Request $request){
        $teamId = 2; 
        if($request->has('teamId')){
            $teamId = $request->teamId;
        }
        $response = cricketAPI("/stats/v1/team/".$teamId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function team_stats(Request $request){
        $teamId = 2; 
        $statsType = 'mostRuns'; 
        if($request->has('teamId','statsType')){
            $teamId = $request->teamId;
            $statsType = $request->statsType;
        }
        $response = cricketAPI("/stats/v1/team/".$teamId."/statsType/".$statsType);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    // venues apis 
    public function venues_list(Request $request){
        $venueId = 2; 
        if($request->has('venueId')){
            $venueId = $request->venueId;
        }
        $response = cricketAPI("/venues/v1/".$venueId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function venues_stats(Request $request){
        $venueId = 2; 
        if($request->has('venueId')){
            $venueId = $request->venueId;
        }
        $response = cricketAPI("/stats/v1/venue/".$venueId);
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    public function venues_matches(Request $request){
        $venueId = 2; 
        if($request->has('venueId')){
            $venueId = $request->venueId;
        }
        $response = cricketAPI("/venues/v1/".$venueId."/matches");
        
        if ($response->successful()) {
            return response()->json($response->json(), 200);
        } else {
            return response()->json($response->body(), $response->status());
        }
    }

    // players apis
    public function players_info(Request $request){
        $players_info = Http::get($this->ENDPOINT.'/players_info?apikey='.$this->API_KEY.'&offset='.$request->offset.'&id='.$request->id );
        return response()->json($players_info->json(), 200);
    }

    public function search_players(Request $request){
        //  $players = Http::get($this->ENDPOINT.'/players?apikey='.$this->API_KEY.'&offset='.$request->offset.'&search='.$request->search);
        // $response = cricketAPI("/teams/v1/league");
        
        // if ($response->successful()) {
        //     return response()->json($response->json(), 200);
        // } else {
        //     return response()->json($response->body(), $response->status());
        // }
    }



}
