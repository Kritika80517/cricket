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

    public function get_players(Request $request){
        $players = Http::get($this->ENDPOINT.'/players?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        return response()->json($players->json(), 200);
    }
}
