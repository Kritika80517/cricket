<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;
use File;



class SettingController extends Controller
{
    //about
    public function about()
    {
        return view('admin.setting.about');
    }

    public function aboutSetting(Request $request)
    {

        
        if($request->has('about_image')){
            $about_image = DB::table('settings')->where(['key' => 'about_image'])->first()->value ?? null;
            $imagePath = public_path($about_image);
            if(($about_image != NULL) && File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('about_image');
            $about_image_name = date('YmdHis').'.'.$request->about_image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/admin/img/setting/about/'); 
            $image->move($destinationPath, $about_image_name);
            DB::table('settings')->updateOrInsert(['key' => 'about_image'], [
                'value' => 'assets/admin/img/setting/about/'.$about_image_name
            ]);
        }

        DB::table('settings')->updateOrInsert(['key' => 'about_us'], [
            'value' => $request['about_us']
        ]);

        // DB::table('settings')->updateOrInsert(['key' => 'testimonials'], [
        //     'value' => $request['testimonials']
        // ]);

        // DB::table('settings')->updateOrInsert(['key' => 'our_vission'], [
        //     'value' => $request['our_vission']
        // ]);
        
        // DB::table('settings')->updateOrInsert(['key' => 'director_note'], [
        //     'value' => $request['director_note']
        // ]);

        return redirect()->back()->with('success', 'About updated successfully');

    }

    public function show()
    {
        $setting = Setting::first();
        return view('admin.setting.website', compact('setting'));
    }

    public function websiteSetting(Request $request)
    {
        $favicon = DB::table('settings')->where(['key' => 'favicon'])->first()->value ?? null;
        $logo = DB::table('settings')->where(['key' => 'logo'])->first()->value ?? null;

        if($request->hasfile('favicon')){
            $imagePath = public_path('assets/admin/img/setting/logo/'.$favicon);
            if(($favicon != NULL) && File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('favicon');
            $favicon_name = date('YmdHis').'.'.$request->favicon->getClientOriginalExtension();
            $destinationPath = public_path('/assets/admin/img/setting/logo/'); 
            $image->move($destinationPath, $favicon_name);
            DB::table('settings')->updateOrInsert(['key' => 'logo'], [
                'value' => $favicon_name
            ]);
        }

        if($request->hasfile('logo')){
            $imagePath = public_path('assets/admin/img/setting/logo/'.$logo);
            if($logo && File::exists($imagePath)){
                unlink($imagePath);
            }
            $image = $request->file('logo');
            $name = date('YmdHis').'.'.$request->logo->getClientOriginalExtension();
            $destinationPath = public_path('/assets/admin/img/setting/logo/'); 
            $image->move($destinationPath, $name);
            DB::table('settings')->updateOrInsert(['key' => 'logo'], [
                'value' => $name
            ]);
        }

        DB::table('settings')->updateOrInsert(['key' => 'address'], [
            'value' => $request['address']
        ]);
        DB::table('settings')->updateOrInsert(['key' => 'email'], [
            'value' => $request['email']
        ]);
        DB::table('settings')->updateOrInsert(['key' => 'email2'], [
            'value' => $request['email2']
        ]);
        DB::table('settings')->updateOrInsert(['key' => 'phone'], [
            'value' => $request['phone']
        ]);
        DB::table('settings')->updateOrInsert(['key' => 'phone2'], [
            'value' => $request['phone2']
        ]);
       
        DB::table('settings')->updateOrInsert(['key' => 'about_company'], [
            'value' => $request['about_company']
        ]);
    
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
}
