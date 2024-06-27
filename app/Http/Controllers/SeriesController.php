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
    public function getSNews($seriesId) {
        $response = cricketAPI("/news/v1/series/".$seriesId);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getPointTable($seriesId) {
        $response = cricketAPI("/stats/v1/series/".$seriesId."/points-table");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getVenues($seriesId) {
        $response = cricketAPI("/series/v1/".$seriesId."/venues");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
    public function getSqad($seriesId) {
        $response = cricketAPI("/series/v1/".$seriesId."/squads");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function getPlayers($seriesId,$sqad_id) {
        $response = cricketAPI("/series/v1/".$seriesId."/squads/".$sqad_id);
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }
}
