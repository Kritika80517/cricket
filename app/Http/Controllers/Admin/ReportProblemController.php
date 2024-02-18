<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportProblemController extends Controller
{
    public function index(){
        $report = ReportProblem::with(['userName', 'userContact'])->get();
        //dd($report);
        return view('admin.report-problem.index', compact('report'));
    }

    public function destory($id){
        $article = ReportProblem::find($id);
        $article->delete();
        return redirect('admin.articles.categories')->with('success', 'Report deleted successfully');
    }
}
