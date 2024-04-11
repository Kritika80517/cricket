<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MatchController extends Controller
{
    private $API_KEY, $ENDPOINT;
    public function __construct() {
        $this->API_KEY = env("CRICKET_API_KEY", null);
        $this->ENDPOINT = env("CRICKET_ENDPOINT", null);
    }
    
    public function index(Request $request){
        $matches = Http::get($this->ENDPOINT.'/matches?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        $matches = $matches->json();
        return view('admin.match-schedule.match_list.index', compact('matches'));
    }

    public function currentMatch(Request $request){
        $currentMatches = Http::get($this->ENDPOINT.'currentMatches/?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        $currentMatches = $currentMatches->json();
        return view('admin.match-schedule.current.index', compact('currentMatches'));
    }
}
