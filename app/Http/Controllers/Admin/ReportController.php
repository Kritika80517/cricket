<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(Request $request){
        $reports = Report::with('user')->latest()->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function show($id){
        $report = Report::where('id', $id)->first();
        return view('admin.reports.show', compact('report'));
    }

}
