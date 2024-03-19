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

    public function suggestionVideo(Request $request){
       
        $videoId = $request->input('video_id');
        // Fetch the current video
        $video = Video::find($videoId);
        
        if (!$video) {
            return response()->json(['error' => 'Video not found'], 404);
        }

        // Find related videos based on category
        $relatedVideos = Video::where('category', $video->category)
        ->where('id', '!=', $videoId) // Exclude the current video
        ->limit(5) // Limit the number of related videos
        ->get();

        return response()->json($relatedVideos);

    }
}

