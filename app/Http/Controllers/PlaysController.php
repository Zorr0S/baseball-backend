<?php

namespace App\Http\Controllers;

use App\Models\Plays;
use Illuminate\Http\Request;

class PlaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $plays = Plays::all();
        return $plays;
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
        $plays = new Plays();
        $plays->MatchAnotationID= $request->MatchAnotationID;
        $plays->jugada= $request->jugada;
        $plays->save();
        return  $plays;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plays  $plays
     * @return \Illuminate\Http\Response
     */
    public function show(Plays $plays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plays  $plays
     * @return \Illuminate\Http\Response
     */
    public function edit(Plays $plays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plays  $plays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plays $plays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plays  $plays
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plays $plays)
    {
        //
    }
}
