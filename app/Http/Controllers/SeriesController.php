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
}
