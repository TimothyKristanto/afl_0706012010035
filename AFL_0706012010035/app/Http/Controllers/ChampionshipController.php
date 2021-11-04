<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use App\Models\Team;
use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $championships = Championship::all();
        $championshipsLength = count($championships);

        if($championshipsLength > 4){
            $backgroundRows = 9 + floor(3 * ($championshipsLength / 4)); 
        }else{
            $backgroundRows = 8;
        }

        return view('championship', [
            'title'=>'Championship',
            'backgroundRows'=>$backgroundRows,
            'championships'=>$championships
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
        return view('createChampionshipForm', [
            'title'=> 'Championship',
            'teams'=>Team::all(),
            'backgroundRows'=>8
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
        Championship::create([
            'name'=>$request->name,
            'year'=>$request->year,
            'league'=>$request->league,
            'championship_mvp'=>$request->championship_mvp,
            'champion_team'=>$request->champion_team
        ]);

        return redirect(route('championship.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('championshipDetails', [
            'title'=>'Championship',
            'backgroundRows'=>8,
            'championship'=>Championship::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('editChampionshipForm', [
            'title'=>'Championship',
            'championship'=>Championship::findOrFail($id),
            'teams'=>Team::all(),
            'backgroundRows'=>8
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $championship = Championship::findOrFail($id);

        $championship->update([
            'name'=>$request->name,
            'year'=>$request->year,
            'league'=>$request->league,
            'championship_mvp'=>$request->championship_mvp,
            'champion_team'=>$request->champion_team
        ]);

        return redirect(route('championship.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Championship  $championship
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $championship = Championship::findOrFail($id);

        $championship->delete();

        return redirect(route('championship.index'));
    }
}
