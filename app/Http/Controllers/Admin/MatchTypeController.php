<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MatchType;
use App\Models\Team;
use Illuminate\Support\Facades\Http;


class MatchTypeController extends Controller
{
    // public function index(){
    //     $matchtype = MatchType::latest()->get();
    //     return view('admin.match-schedule.match-type.index', compact('matchtype'));
    // }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        $matchtype = new MatchType();
        $matchtype->name = $request->name;
        $matchtype->status = $request->status;
        $matchtype->save();
        return redirect('admin/matchschedule/matchtype/')->with('success', 'Matchtype added successfully');;
    }

    public function edit($id)
    {
        $matchtype = MatchType::where('id', $id)->first();
        $response = [
            'matchtype' => $matchtype,
        ];
        return response()->json($matchtype, 200); 
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $matchtype = MatchType::where('id', $request->matchtype_id)->first();
        $matchtype->name = $request->name;
        $matchtype->status = $request->status;
        $matchtype->save();
        return redirect('admin/matchschedule/matchtype')->with('success', 'Matchtype updated successfully');
    }
    public function destory($id){
        $matchtype = MatchType::find($id);
        $matchtype_count = Team::where('match_id', $id)->count();
        if ($matchtype_count > 0){
            return redirect()->back()->with('fail', 'You can not delete mtach type');
        }
        $matchtype->delete();
        return redirect('admin/matchschedule/matchtype')->with('success', 'Matchtype deleted successfully');
    }
    private $API_KEY, $ENDPOINT;
    public function __construct() {
        $this->API_KEY = env("CRICKET_API_KEY", null);
        $this->ENDPOINT = env("CRICKET_ENDPOINT", null);
    }

    public function series_list(Request $request){
        $series = Http::get($this->ENDPOINT.'/series?apikey='.$this->API_KEY.'&offset='.$request->offset ?? 0);
        $series = $series->json();
        return view('admin.match-schedule.series-list.index', compact('series'));
    }

}
