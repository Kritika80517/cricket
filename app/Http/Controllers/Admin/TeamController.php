<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\MatchType;
use Str;
use App\Helpers\FileHelper;
use Illuminate\Support\Facades\Http;


class TeamController extends Controller
{
    // public function index(){
    //     $teams = Team::latest()->get();
    //     return view('admin.match-schedule.teams.index', compact('teams'));
    // }

    // public function create(){
    //     // $teams = Team::latest()->get();
    //     $matchtype = MatchType::all();
    //     return view('admin.match-schedule.teams.create', compact('matchtype'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name'=> 'required',
    //         'short_name' => 'required'
    //     ]);
    //     $team = new Team();
    //     $team->match_ids = json_encode($request->match_ids);
    //     $team->name = $request->name;
    //     $team->slug = Str::slug($request->name);
    //     $team->short_name = $request->short_name;
    //     $team->image = FileHelper::image_upload('assets/admin/img/team/', 'png', $request->file('image'));
    //     $team->save();
    //     return redirect('admin/matchschedule/teams')->with('success', 'Team created successfully');
    // }

    // public function edit($id){
    //     $matchtype = MatchType::all();
    //     $team = Team::where('id', $id)->first();
    //     return view('admin.match-schedule.teams.edit', compact('team','matchtype'));
    // }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'name'=> 'required',
    //         'short_name' => 'required'
    //     ]);
    //     $team = Team::where('id', $request->id)->first();
    //     $team->match_ids = json_encode($request->match_ids);
    //     $team->name = $request->name;
    //     $team->slug = Str::slug($request->name);
    //     $team->short_name = $request->short_name;
    //     $team->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/team/', $team->image, 'png', $request->file('image')) : $team->image;
    //     $team->save();
    //     return redirect('admin/matchschedule/teams')->with('success', 'Team updated successfully');
    // }

    // public function destroy(string $id)
    // {
    //     $data = Team::find($id);
    //     $data->delete();
    //     return redirect()->back()->with('success', 'Team deleted successfully');
    // }

    private $API_KEY, $ENDPOINT;
    public function __construct() {
        $this->API_KEY = env("CRICKET_API_KEY", null);
        $this->ENDPOINT = env("CRICKET_ENDPOINT", null);
    }

    public function matches_list(Request $request){
        $matches = Http::get($this->ENDPOINT.'/matches?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        $matches = $matches->json();
        return view('admin.match-schedule.match_list.index', compact('matches'));
    }
}
