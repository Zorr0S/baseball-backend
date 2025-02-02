<?php

namespace App\Http\Controllers;

use App\Models\PlayerType;
use Illuminate\Http\Request;

class PlayerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playerType= PlayerType::all();
        return $playerType;
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
        $playerType= new PlayerType();
        $playerType->Nombre =  $request->Nombre;
        $playerType->save();
        return $playerType;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerType  $playerType
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerType $playerType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerType  $playerType
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerType $playerType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayerType  $playerType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerType $playerType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerType  $playerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerType $playerType)
    {
        //
    }
}
