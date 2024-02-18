<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\AdsCategory;
use App\Helpers\FileHelper;

class AdsController extends Controller
{
    public function index(){
        $ads = Ads::with(['category', 'subcategory'])->get();
        return view('admin.ads.index', compact('ads'));
    }

    public function create(){
        $category = AdsCategory::Parent()->get();
        $sub_category = AdsCategory::Child()->get();
        return view('admin.ads.create', compact('category','sub_category'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'ads_type' => 'required',
            'ads_placement' => 'required',
        ]);
        $ads = new Ads();
        $ads->category_id = $request->category_id;
        $ads->sub_category_id = $request->sub_category;
        $ads->name = $request->name;
        $ads->ads_type = $request->ads_type;
        $ads->ads_placement = $request->ads_placement;
        $ads->video_url = $request->video_url;
        $ads->status = $request->status;
        $ads->description = $request->description;
        $ads->image_url = FileHelper::image_upload('assets/admin/img/ads/', 'png', $request->file('image_url'));
        $ads->save();
        return redirect('admin/ads');
    }

    public function edit($id){
        $category = AdsCategory::Parent()->get();
        $sub_category = AdsCategory::Child()->get();
        $ads = Ads::where('id', $id)->first();
        return view('admin.ads.edit', compact('category','ads','sub_category'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'ads_type' => 'required',
        ]);
        //dd($request->all());
        $ads = Ads::where('id', $request->id)->first();
        $ads->category_id = $request->category_id;
        $ads->sub_category_id = $request->sub_category_id;
        $ads->name = $request->name;
        $ads->ads_type = $request->ads_type;
        $ads->ads_placement = $request->ads_placement;
        $ads->video_url = $request->video_url;
        $ads->status = $request->status;
        $ads->description = $request->description;
        $ads->image_url = $request->has('image_url') ? FileHelper::image_update('assets/admin/img/ads/', $ads->image_url, 'png', $request->file('image_url')) : $ads->image_url;
        //dd($ads);
        $ads->save();
        return redirect('admin/ads');
    }

    public function destory($id){
        $ads = Ads::find($id);
        FileHelper::image_unlink('assets/admin/img/ads/', $ads->image_url);
        $ads->delete();
        return redirect('admin/ads')->with('success', 'Ads deleted successfully');
    }
}
