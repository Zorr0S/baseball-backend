<?php

namespace App\Http\Controllers;

use App\Models\TeamMembers;
use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teamMembers =  TeamMembers::all();
         
        return $teamMembers;
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
        $teams = new TeamMembers();
        $teams->EquipoID = $request->EquipoID;
        $teams->IDIntegrantes = $request->IDIntegrantes;
        
        $teams->save();
        return $teams;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       $teamMembers = TeamMembers::where('EquipoID',1)->get();
       return $teamMembers;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMembers $teamMembers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMembers $teamMembers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMembers  $teamMembers
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMembers $teamMembers)
    {
        //
    }
}
