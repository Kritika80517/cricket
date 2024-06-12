<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return view('frontend.news.index');
    }

    public function news(Request $request){
        if($request->category){
            $response = cricketAPI("/news/v1/cat/".$request->category);
        }else{
            $response = cricketAPI("/news/v1/index");
        }
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function newsDetails(Request $request, $newsId){
        $response = cricketAPI("/news/v1/detail/".$newsId);
        $data = [];
        if ($response->successful()) {
            $data = $response->json();
            return view('frontend.news.details', compact('data'));
        }
        return view('frontend.news.details', compact('data'));

    }

    public function categories(Request $request){
        $response = cricketAPI("/news/v1/cat");
        
        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json([]);
        }
    }

    public function show(){
        return view('frontend.news.details');
    }
}