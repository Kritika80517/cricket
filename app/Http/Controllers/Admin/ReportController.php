<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\ReportReply;
use Auth;

class ReportController extends Controller
{
    public function index(Request $request){
        $reports = Report::with('user')->latest()->get();
        return view('admin.reports.index', compact('reports'));
    }

    public function show($id){
        $report = Report::with(["replies"])->where('id', $id)->first();
        return view('admin.reports.show', compact('report'));
    }

    public function reply(Request $request){
        $validatedData = $request->validate([
            'message' => 'required|string',
            'files' => 'nullable|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|in:pending,onhold,inprogress,solved',
        ]);
        $reply = new ReportReply();
        $reply->report_id = $request->report_id;
        $reply->reply_by = Auth::user()->id;
        $reply->message = $request->message;
        $reply->save();
        Report::where('id', $request->report_id)->update(['status' => $request->status]);
        return redirect("admin/reports/".$request->report_id)->with('success', 'Reply successfully');
    }

    public function delete($id){
        $report = Report::where('id', $id)->delete();
        return back()->with('success', 'Report deleted successfully');
    }

}
