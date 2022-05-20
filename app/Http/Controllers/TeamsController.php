<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\TeamMembers;

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
        //
        $teams = Teams::all();
        for ($i= 0; $i <sizeof($teams) ; $i++) { 
            $teams[$i]->miembros = TeamMembers::where('EquipoID', $teams[$i]->id)->get();
          }
      
        return $teams;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
        $teams = new Teams();
        $teams->Nombre = $request->Nombre;
        
        $teams->save();
        return $teams;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $teams= Teams::find($request->id);
      
            $teams->miembros = TeamMembers::where('EquipoID', $teams->id)->get();
          
      
        return $teams;
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
    public function update(Request $request, Teams $teams)
    {
        //
        $teams= Teams::find($request->id);
        $teams->Nombre = $request->Nombre;
        $teams->update();
        return $teams;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $teams)
    {
        //

    }
}
