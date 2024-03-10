<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function index(){
        // $player = Player::latest()->get();
        // return view('admin.match-schedule.players.index', compact('player'));
        return view('admin.match-schedule.players.index');
    }

    public function create(){
        return view('admin.match-schedule.players.create');
    }

}
