<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\MatchHighlight;
use App\Models\MatchHighlightCategory;
use Illuminate\Http\Request;

class MatchHighlightCategoryController extends Controller
{
    public function index(){
        $match = MatchHighlightCategory::Parent()->get();
        return view('admin.match-highlighted-videos.category', compact('match'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $match = new MatchHighlightCategory();
        $match->name = $request->name;
        $match->status = $request->status;
        $match->save();
        return redirect('admin/matchvideo/categories/')->with('success', 'Video category added successfully');;
    }

    public function edit($id)
    {
        $category = MatchHighlightCategory::where('id', $id)->first();
        $response = [
            'category' => $category,
        ];
        return response()->json($category, 200); 
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $match = MatchHighlightCategory::where('id', $request->category_id)->first();
        $match->name = $request->name;
        $match->status = $request->status;
        $match->save();
        return redirect('admin/matchvideo/categories')->with('success', 'Video category updated successfully');
    }
    public function destory($id){
        $match = MatchHighlightCategory::find($id);
        $video_count = MatchHighlight::where('category_id', $id)->count();
        if ($video_count > 0){
            return redirect()->back()->with('fail', 'You can not delete video category');
        }
        $match->delete();
        return redirect('admin.matchvideo.categories')->with('success', 'Video category deleted successfully');
    }

    
    public function subIndex(){
        $match = MatchHighlightCategory::with('parents')->Child()->latest()->get();
        $parent_video = MatchHighlightCategory::Parent()->get();
        return view('admin.match-highlighted-videos.subcategory', compact('match', 'parent_video'));
    }

    public function subStore(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $subcategory = new MatchHighlightCategory();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/matchvideo/categories/subcategory')->with('success', 'Sub category added successfully');;
    }

    public function subEdit($id)
    {
        $subcategory = MatchHighlightCategory::where('id', $id)->first();
        $parent_video = MatchHighlightCategory::Parent()->where('id', '<>' ,$id)->get();
        $response = [
            'parent_video' => $parent_video,
            'category' => $subcategory,
        ];
        return response()->json($subcategory, 200); 
    }

    public function subUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $subcategory = MatchHighlightCategory::where('id', $request->category_id)->first();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/matchvideo/categories/subcategory')->with('success', 'Sub category updated successfully');
    }
    public function subDestory($id){
        $subcategory = MatchHighlightCategory::find($id);
        $video_count = MatchHighlight::where('sub_category_id', $id)->count();
        if ($video_count > 0){
            // return with message that can't delete the article
            return redirect()->back()->with('failed', 'You can not delete video sub category');

        }
        $subcategory->delete();
        return redirect('admin.matchvideo.categories/subcategory')->with('success', 'Sub category deleted successfully');
    }
}
