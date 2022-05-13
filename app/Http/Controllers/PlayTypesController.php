<?php

namespace App\Http\Controllers;

use App\Models\PlayTypes;
use Illuminate\Http\Request;

class PlayTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playTypes = PlayTypes::all();
        
        return $playTypes;
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
        $playTypes = new PlayTypes();
        $playTypes->Nombre= $request->Nombre;
        $playTypes->save();
        return $playTypes;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayTypes  $playTypes
     * @return \Illuminate\Http\Response
     */
    public function show(PlayTypes $playTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayTypes  $playTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayTypes $playTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayTypes  $playTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayTypes $playTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayTypes  $playTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayTypes $playTypes)
    {
        //
    }
}
