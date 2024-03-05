<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Str;
use App\Helpers\FileHelper;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::latest()->get();
        return view('admin.match-schedule.teams.index', compact('teams'));
    }

    public function create(){
        // $teams = Team::latest()->get();
        return view('admin.match-schedule.teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'short_name' => 'required'
        ]);
        $team = new Team();
        $team->name = $request->name;
        $team->slug = Str::slug($request->name);
        $team->short_name = $request->short_name;
        $team->image = FileHelper::image_upload('assets/admin/img/team/', 'png', $request->file('image'));
        $team->save();
        return redirect('admin/matchschedule/teams')->with('success', 'Team created successfully');
    }

    public function edit($id){
        $team = Team::where('id', $id)->first();
        return view('admin.match-schedule.teams.edit', compact('team'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'short_name' => 'required'
        ]);
        $team = Team::where('id', $request->id)->first();
        $team->name = $request->name;
        $team->slug = Str::slug($request->name);
        $team->short_name = $request->short_name;
        $team->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/team/', $team->image, 'png', $request->file('image')) : $team->image;
        $team->save();
        return redirect('admin/matchschedule/teams')->with('success', 'Team updated successfully');
    }

    public function destroy(string $id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Team deleted successfully');
    }
}
