<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MatchController extends Controller
{
   
    public function index(Request $request){
        $matches = [];
        $news = [];
        if(request()->seriesId){
            $match_response = cricketAPI("/series/v1/".request()->seriesId);
            if ($match_response->successful()) {
                $matches = $match_response->json();
            }

            $news_response = cricketAPI("/news/v1/series/".request()->seriesId);
            if ($news_response->successful()) {
                $news = $news_response->json();
            }
        }
        return view('admin.match-schedule.series.index', compact('matches', 'news'));
    }

    public function series($type){
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
}
