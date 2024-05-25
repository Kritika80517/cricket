<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactUs;
use App\Models\Report;

class DashboardController extends Controller
{
    public function index()
    {
        $data['user_count'] = User::where('role','user')->count();
        $data['staff_count'] = User::where('role','staff')->count();
        $data['contact'] = ContactUs::latest()->take(5)->get();
        $data['contact_count'] = ContactUs::count();
        $data['report_count'] = Report::count();
        // dd($data);
        return view('admin.dashboard', compact('data'));
    }
    
}
