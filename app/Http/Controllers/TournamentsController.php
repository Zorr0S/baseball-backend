<?php

namespace App\Http\Controllers;

use App\Models\Tournaments;
use App\Models\Matches;

use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournament = Tournaments::all();
        for ($i= 0; $i <sizeof($tournament) ; $i++) { 
            $tournament[$i]->partidos = Matches::where('idTorneo', $tournament[$i]->id)->get();
          }
        return $tournament;
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
        $torneo = new Tournaments();
        $torneo->idCiudad=  $request->idCiudad;
        
        $torneo->idCategoria=  $request->idCategoria;
        $torneo->idGenero=  $request->idGenero;
        $torneo->idTipo =  $request->idTipo;
        $torneo->administradores=  $request->administradores;
        $torneo->participantes=  $request->participantes;
        $torneo->estatus=true;
        $torneo->save();
        return $torneo;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
