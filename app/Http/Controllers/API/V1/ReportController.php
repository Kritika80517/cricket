 frontend chane<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;
use Auth;

class ReportController extends Controller
{
    // public function index(Request $request){
    //     $reports = Report::where('user_id', auth()->user()->id)->latest()->get();
    //     return response()->json(["message" => "Reports list", "data" => $reports], 200);
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'nullable|string',
    //         'message' => 'nullable|string',
    //         'files' => 'nullable|mimes:jpeg,png,jpg|max:2048',
    //         'status' => 'required|in:pending,onhold,inprogress,solved',
    //     ]);
    //     $validatedData['user_id'] = Auth::user()->id;
    //     $report = Report::create($validatedData);

    //     return response()->json(['message' => 'Report submitted successfully', 'report' => $report], 201);
    // }

    // public function show(Request $request, $id){
    //     $report = Report::find($id);
    //     if (!$report) {
    //         return response()->json(['message' => 'Report not found'], 404);
    //     }
    //     return response()->json(["message" => "Report", "data" => $report], 200);
    // }

    // public function update(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'nullable|string',
    //         'message' => 'nullable|string',
    //         'files' => 'nullable|mimes:jpeg,png,jpg|max:2048',
    //         'status' => 'required|in:pending,onhold,inprogress,solved',
    //     ]);
    
    //     $report = Report::find($id);
    //     if (!$report) {
    //         return response()->json(['message' => 'Report not found'], 404);
    //     }
    
    //     $report->update($validatedData);
    
    //     return response()->json(['message' => 'Report updated successfully', 'report' => $report], 200);
    // }

    public function delete($id){
        Report::where(['id' => $id, "user_id" => auth()->user()->id])->delete();
        return response()->json(['message' => 'Report delete successfully']);
    }
}
