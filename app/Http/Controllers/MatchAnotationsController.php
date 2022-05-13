<?php

namespace App\Http\Controllers;

use App\Models\MatchAnotations;
use App\Models\Plays;
use Illuminate\Http\Request;

class MatchAnotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $matchAnotations = MatchAnotations::all();
        for ($i= 0; $i <sizeof($matchAnotations) ; $i++) { 
          $matchAnotations[$i]->plays = Plays::where('MatchAnotationID', $matchAnotations[$i]->id)->get();
        }
    
        return $matchAnotations;
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
        $matchAnotations = new MatchAnotations();
        $matchAnotations->IDPartido= $request->id;
        $matchAnotations->IDEquipo=  $request->IDEquipo;
        $matchAnotations->IDJugador=$request->IDJugador;
        $matchAnotations->IDPosicion=$request->IDPosicion;
        $matchAnotations->CarrerasAnotadas=0;
        $matchAnotations-> HitsConectados= 0;
        
        $matchAnotations->save();
        return $matchAnotations;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatchAnotations  $matchAnotations
     * @return \Illuminate\Http\Response
     */
    public function show(MatchAnotations $matchAnotations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatchAnotations  $matchAnotations
     * @return \Illuminate\Http\Response
     */
    public function edit(MatchAnotations $matchAnotations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MatchAnotations  $matchAnotations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatchAnotations $matchAnotations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatchAnotations  $matchAnotations
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatchAnotations $matchAnotations)
    {
        //
    }
}
