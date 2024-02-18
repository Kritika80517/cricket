<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\AdsCategory;
use Illuminate\Http\Request;

class AdsCategoryController extends Controller
{
    public function index(){
        $ads = AdsCategory::Parent()->get();
        return view('admin.ads.category', compact('ads'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $ads = new AdsCategory();
        $ads->name = $request->name;
        $ads->status = $request->status;
        $ads->save();
        return redirect('admin/ads/categories/')->with('success', 'Ads category added successfully');;
    }

    public function edit($id)
    {
        $category = AdsCategory::where('id', $id)->first();
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
        $ads = AdsCategory::where('id', $request->category_id)->first();
        $ads->name = $request->name;
        $ads->status = $request->status;
        $ads->save();
        return redirect('admin/ads/categories')->with('success', 'Ads category updated successfully');
    }
    public function destory($id){
        $ads = AdsCategory::find($id);
        $ads_count = Ads::where('category_id', $id)->count();
        if ($ads_count > 0){
            return redirect()->back()->with('fail', 'You can not delete ads category');
        }
        $ads->delete();
        return redirect('admin.ads.categories')->with('success', 'Ads category deleted successfully');
    }

    
    public function subIndex(){
        $ads = AdsCategory::with('parents')->Child()->latest()->get();
        $parent_ads = AdsCategory::Parent()->get();
        return view('admin.ads.subcategory', compact('ads', 'parent_ads'));
    }

    public function subStore(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $subcategory = new AdsCategory();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/ads/categories/subcategory')->with('success', 'Sub category added successfully');;
    }

    public function subEdit($id)
    {
        $subcategory = AdsCategory::where('id', $id)->first();
        $parent_ads = AdsCategory::Parent()->where('id', '<>' ,$id)->get();
        $response = [
            'parent_ads' => $parent_ads,
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
        $subcategory = AdsCategory::where('id', $request->category_id)->first();
        $subcategory->name = $request->name;
        $subcategory->parent_id = $request->parent_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/ads/categories/subcategory')->with('success', 'Sub category updated successfully');
    }
    public function subDestory($id){
        $subcategory = AdsCategory::find($id);
        $ads_count = Ads::where('sub_category_id', $id)->count();
        if ($ads_count > 0){
            // return with message that can't delete the article
            return redirect()->back()->with('failed', 'You can not delete ads sub category');
        }
        $subcategory->delete();
        return redirect('admin/ads/categories/subcategory')->with('success', 'Sub category deleted successfully');
    }
}
