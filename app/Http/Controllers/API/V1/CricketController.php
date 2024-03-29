<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CricketController extends Controller
{
    private $API_KEY, $ENDPOINT;
    public function __construct() {
        $this->API_KEY = env("CRICKET_API_KEY", null);
        $this->ENDPOINT = env("CRICKET_ENDPOINT", null);
    }

    public function series_list(Request $request){
        $series = Http::get($this->ENDPOINT.'/series?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        return response()->json($series->json(), 200);
    }

    public function series_info(Request $request){
        $series_info = Http::get($this->ENDPOINT.'/series_info?apikey='.$this->API_KEY.'&offset='.$request->offset.'&id='.$request->id);
        return response()->json($series_info->json(), 200);
    }

    public function series_search(Request $request){
        //dd($request->all());
        $series = Http::get($this->ENDPOINT.'/series?apikey='.$this->API_KEY.'&offset='.$request->offset.'&search='.$request->search);
        return response()->json($series->json(), 200);
    }

    
    public function matches_list(Request $request){
        $matches = Http::get($this->ENDPOINT.'/matches?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        return response()->json($matches->json(), 200);
    }

    public function matches_info(Request $request){
        $match_info = Http::get($this->ENDPOINT.'/match_info?apikey='.$this->API_KEY.'&offset='.$request->offset.'&id='.$request->id);
        return response()->json($match_info->json(), 200);
    }

    public function current_matches(Request $request){
        $currentMatches = Http::get($this->ENDPOINT.'/currentMatches?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        return response()->json($currentMatches->json(), 200);
    }

    public function players_list(Request $request){
        $players = Http::get($this->ENDPOINT.'/players?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        return response()->json($players->json(), 200);
    }

    public function players_info(Request $request){
        $players_info = Http::get($this->ENDPOINT.'/players_info?apikey='.$this->API_KEY.'&offset='.$request->offset.'&id='.$request->id );
        return response()->json($players_info->json(), 200);
    }

    public function search_players(Request $request){
        $players = Http::get($this->ENDPOINT.'/players?apikey='.$this->API_KEY.'&offset='.$request->offset.'&search='.$request->search);
        return response()->json($players->json(), 200);
    }
}
