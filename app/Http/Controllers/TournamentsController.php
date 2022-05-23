<?php

namespace App\Http\Controllers;

use App\Models\Tournaments;
use App\Models\Matches;
use App\Models\Torneo;

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
        // select * from equipos
        $tournaments = Torneo::all();
        return $tournaments;
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
        // $torneo = new Tournaments();
        // $torneo->idCiudad=  $request->idCiudad;
        
        // $torneo->idCategoria=  $request->idCategoria;
        // $torneo->idGenero=  $request->idGenero;
        // $torneo->idTipo =  $request->idTipo;
        // $torneo->administradores=  $request->administradores;
        // $torneo->participantes=  $request->participantes;
        // $torneo->estatus=true;
        // $torneo->save();
        // return $torneo;
        return Torneo::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $tournament = Tournaments::where('id',$id)->get();
        // for ($i= 0; $i <sizeof($tournament) ; $i++) { 
        //     $tournament[$i]->partidos = Matches::where('idTorneo', $tournament[$i]->id)->get();
        //   }
        // return $tournament;
        $tournament = Torneo::select('*')
        ->where('idTorneo','=',$id)
        // ->where('estatus','=',$status)
        ->get();

        return $tournament;
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
    public function update(Request $request, $id)
    {
        //
        // $actualizar = Tournaments::find($request->id);
        // $actualizar->idCiudad=  $request->idCiudad;
        
        // $actualizar->idCategoria=  $request->idCategoria;
        // $actualizar->idGenero=  $request->idGenero;
        // $actualizar->idTipo =  $request->idTipo;
        // $actualizar->administradores=  $request->administradores;
        // $actualizar->participantes=  $request->participantes;
        // $actualizar->estatus=$request->estatus;
        // $actualizar->update();
        // return $actualizar;
        $tournament = Torneo::select('*')
        ->where('idTorneo','=',$id)
        ->update($request->all());
        return $tournament;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tournament = Torneo::select('*')
        ->where('idTorneo','=',$id)
        ->delete();

        return $tournament;
    }
}
