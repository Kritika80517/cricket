<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactUs;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user_count'] = User::where('role','user')->count();
        $data['contact'] = ContactUs::latest()->take(5)->get();
        $data['contact_count'] = ContactUs::count();
        // dd($data);
        return view('admin.dashboard', compact('data'));
    }
    
}
