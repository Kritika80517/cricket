<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // $data['user_count'] = User::Role('user')->count();
        // $data['partner_count'] = User::Role('partner')->count();
        // dd($data['contact']);
        return view('admin.dashboard');
    }
}
