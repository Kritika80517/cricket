<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        return view('frontend.series.index');
    }

    public function seriesDetails(){
        return view('frontend.series.details');
    }

    public function getSeries($type) {
        $response = cricketAPI("/series/v1/".$type);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getSchedule($seriesId) {
        $response = cricketAPI("/series/v1/".$seriesId);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
