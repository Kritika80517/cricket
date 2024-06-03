<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{
     
    public function index(Request $request){
        $matches = [];
        $news = [];
        $venue = [];
        $stats = [];
        if(request()->seriesId){
            $match_response = cricketAPI("/series/v1/".request()->seriesId);
            if ($match_response->successful()) {
                $matches = $match_response->json();
            }

            $news_response = cricketAPI("/news/v1/series/".request()->seriesId);
            if ($news_response->successful()) {
                $news = $news_response->json();
            }

            $venue_response = cricketAPI("/series/v1/".request()->seriesId .'/venues');
            if ($venue_response->successful()) {
                $venue = $venue_response->json();
            }

            $stats_response = cricketAPI("/stats/v1/series/".request()->seriesId);
            if ($stats_response->successful()) {
                $stats = $stats_response->json();
            }
        }
        return view('admin.match-schedule.series.index', compact('matches', 'news' ,'venue','stats'));
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
