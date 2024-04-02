<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\FileHelper;
use App\Models\Banner;


class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.add');
        
    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->tag = $request->tag;
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = $request->status;
        $banner->image = FileHelper::image_upload('assets/admin/img/banners/', 'png', $request->file('image'));


        $banner->save();
        return redirect('admin/banners')->with('success', 'Banner created successfully');
    }

    public function show(Banner $banner)
    {
        //
    }

    public function edit($id)
    {
        $data = Banner::where('id', $id)->first();
        return view('admin.banners.edit',compact('data'));
    }

    public function update(Request $request)
    {
        $banner =  Banner::where('id', $request->id)->first();
        $banner->tag = $request->tag;
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->status = $request->status;

        $banner->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/banners/', $banner->image, 'png', $request->file('image')) : $article->image;
    


        $banner->save();
        return redirect('admin/banners')->with('success', 'Banner updated successfully');

    }

    public function destory($id)
    {
        $banner = Banner::where('id', $id)->delete();
        return redirect('admin/banners/')->with('success', 'Banner deleted successfully');

    }
}
