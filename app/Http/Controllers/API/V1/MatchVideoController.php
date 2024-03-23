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
    
        if (!$videoId) {
            return response()->json(['error' => 'Video ID is required'], 400);
        }
        // Fetch the current video
        $video = MatchHighlight::find($videoId);
        if (!$video) {
            return response()->json(['error' => 'Video not found'], 404);
        }
        //dd($video);
        // Find related videos based on category
        $relatedVideos = MatchHighlight::where('category_id', $video->category_id)
            ->where('id', '!=', $videoId) // Exclude the current video
            ->limit(5) // Limit the number of related videos
            ->get();
    
        if ($relatedVideos->isEmpty()) {
            return response()->json(['message' => 'No related videos found'], 200);
        }
        return response()->json($relatedVideos);
    }
    
}

