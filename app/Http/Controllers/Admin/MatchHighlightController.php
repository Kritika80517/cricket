<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MatchHighlight;
use App\Models\MatchHighlightCategory;
use App\Models\language;
use App\Helpers\FileHelper;

class MatchHighlightController extends Controller
{
    public function index(){
        $video = MatchHighlight::with(['category', 'subcategory'])->get();
        return view('admin.match-highlighted-videos.index', compact('video'));
    }

    public function create(){
        $category = MatchHighlightCategory::Parent()->get();
        $sub_category = MatchHighlightCategory::Child()->get();
        $language = language::all();
        return view('admin.match-highlighted-videos.create', compact('category','sub_category','language'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'video_url' => 'required',
            'description' => 'required',
            'language' => 'required',
        ]);
        $video = new MatchHighlight();
        $video->category_id = $request->category_id;
        $video->sub_category_id = $request->sub_category;
        $video->language_id = $request->language;
        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_url = $request->video_url;
        $video->status = $request->status;
        $video->image = FileHelper::image_upload('assets/admin/img/matchhighlight/video/', 'png', $request->file('image'));
        $video->save();
        return redirect('admin/matchvideo');
    }

    public function edit($id){
        $category = MatchHighlightCategory::Parent()->get();
        $sub_category = MatchHighlightCategory::Child()->get();
        $language = language::all();
        $video =MatchHighlight::where('id', $id)->first();
        return view('admin.match-highlighted-videos.edit', compact('category','video','sub_category','language'));
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'video_url'=>'required',
            'image'=>'required',
            'description' => 'required',
            'language_id' => 'required',
        ]);

        $video =MatchHighlight::where('id', $request->id)->first();
        $video->category_id = $request->category_id;
        $video->sub_category_id = $request->sub_category_id;
        $video->language_id = $request->language_id;
        $video->title = $request->title;
        $video->description = $request->description;
        $video->video_url = $request->video_url;
        $video->status = $request->status;
        $video->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/matchhighlight/video/', $video->image, 'png', $request->file('image')) : $video->image;
        $video->save();
        return redirect('admin/matchvideo');
    }

    public function destory($id){
        $video =MatchHighlight::find($id);
        FileHelper::image_unlink('assets/admin/img/matchhighlight/video/', $video->image);
        $video->delete();
        return redirect('admin/matchvideo')->with('success', 'Video deleted successfully');
    }
}
