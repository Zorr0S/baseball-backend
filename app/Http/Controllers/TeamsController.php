<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from equipos
        $teams = Equipo::all();
        return $teams;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Equipo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $team = Equipo::select('*')
        ->where('idEquipo','=',$id)
        // ->where('estatus','=',$status)
        ->get();

        return $team;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $team = Equipo::find($id);
        // $team->update($request->all());
        // return $team;


        $team = Equipo::select('*')
        ->where('idEquipo','=',$id)
        ->update($request->all());
        return $team;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $team = Equipo::select('*')
        ->where('idEquipo','=',$id)
        ->delete();

        return $team;
        //return Equipo::destroy($id);
    }
}
