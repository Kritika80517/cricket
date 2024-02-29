<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MatchHighlight;

class MatchVideoController extends Controller
{
    public function index(Request $request){
        $video = MatchHighlight::latest()->get();
        return response()->json(["message" => "Video list", "data" => $video], 200);
    }
}
