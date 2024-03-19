<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\MatchType;
use App\Models\Team;
use App\Helpers\FileHelper;

class PlayerController extends Controller
{
    public function index(){
        $player = Player::latest()->get();
        return view('admin.match-schedule.players.index', compact('player'));
       // return view('admin.match-schedule.players.index');
    }

    public function create(){
        $matchtype = MatchType::all();
        $team = Team::all();
        return view('admin.match-schedule.players.create',compact('matchtype','team'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'match_ids' => 'required',
            'team_ids' => 'required',
            'playing_role' => 'required',
            'batting_style' => 'required',
            'bowling_style' => 'required',
            
        ]);
        $player = new Player();
        $player->match_ids = json_encode($request->match_ids);
        $player->team_ids = $request->team_ids;
        $player->name = $request->name;
        $player->dob = $request->dob;
        $player->birth_place = $request->birth_place;
        $player->country = $request->country;
        $player->playing_role = $request->playing_role;
        $player->batting_style = $request->batting_style;
        $player->bowling_style = $request->bowling_style;
        $player->about = $request->about;
        $player->image = FileHelper::image_upload('assets/admin/img/players/', 'png', $request->file('image'));
        // dd($player);
        $player->save();
        return redirect('admin/matchschedule/players')->with('success', 'Player created successfully');
    }

    public function edit($id){
        $matchtype = MatchType::all();
        $team = Team::all();
        $player = Player::where('id', $id)->first();
        return view('admin.match-schedule.players.edit',compact('matchtype','team','player'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'match_ids' => 'required',
            'team_ids' => 'required',
            'playing_role' => 'required',
            'batting_style' => 'required',
            'bowling_style' => 'required',
            
        ]);
        $player = Player::where('id', $request->id)->first();
        $player->match_ids = json_encode($request->match_ids);
        $player->team_ids = $request->team_ids;
        $player->name = $request->name;
        $player->dob = $request->dob;
        $player->birth_place = $request->birth_place;
        $player->country = $request->country;
        $player->playing_role = $request->playing_role;
        $player->batting_style = $request->batting_style;
        $player->bowling_style = $request->bowling_style;
        $player->about = $request->about;
        $player->image = $request->has('image') ? FileHelper::image_update('assets/admin/img/players/', $player->image, 'png', $request->file('image')) : $player->image;
        // dd($player);
        $player->save();
        return redirect('admin/matchschedule/players')->with('success', 'Player updated successfully');
    }

    public function destory(string $id)
    {
        $data = Player::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Player deleted successfully');
    }
}
