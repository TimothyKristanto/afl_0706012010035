<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = Team::all();
        $teamsLength = count($teams);

        if($teamsLength > 4){
            $backgroundRows = 9 + floor(3 * ($teamsLength / 4)); 
        }else{
            $backgroundRows = 8;
        }

        return view('team', [
            'title'=>'Team',
            'backgroundRows'=>$backgroundRows,
            'teams'=>$teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createTeamForm', [
            'title'=>'Team',
            'backgroundRows'=>8,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Team::create([
            'name'=>$request->name,
            'team_location_origin'=>$request->team_location_origin,
            'head_coach'=>$request->head_coach,
        ]);

        return redirect(route('team.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $championships = Championship::where('champion_team', $id)->get();
        $championshipsLength = count($championships);

        if($championshipsLength >= 4){
            $backgroundRows = 11 + floor(3 * ($championshipsLength / 3));
        }else{
            $backgroundRows = 11;
        }

        return view('teamDetails', [
            'title'=>'Team',
            'backgroundRows'=>$backgroundRows,
            'team'=>Team::findOrFail($id),
            'championships'=>$championships,
            'championshipsLength'=>$championshipsLength
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('editTeamForm', [
            'title'=>'Team',
            'backgroundRows'=>8,
            'team'=>Team::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $team = Team::findOrFail($id);

        $team->update([
            'name'=>$request->name,
            'team_location_origin'=>$request->team_location_origin,
            'head_coach'=>$request->head_coach,
        ]);

        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $team = Team::findOrFail($id);

        $team->delete();

        return redirect(route('team.index'));
    }
}
