<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $matches= Matches::all();
       
        return $matches;
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
        //
        // $matches = new Matches();
        // $matches->idTorneo= $request->idTorneo;
        // $matches->Nombre = $request->Nombre;
        // $matches->MatchesCasa = $request->MatchesCasa;
        // $matches->MatchesVisitante = $request->MatchesVisitante;
        //  //MatchesGanador,
        //  $matches->estatus= true;
        // $matches->save();
        // return $matches;

        return Matches::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $matches = Matches::select('*')
        ->where('idMatch','=',$id)
        // ->where('estatus','=',$status)
        ->get();

        return $matches;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function edit(Matches $matches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $matches=Matches::find($request->id);
        // $matches->Nombre = $request->Nombre;
        // $matches->MatchesCasa = $request->MatchesCasa;
        // $matches->MatchesVisitante = $request->MatchesVisitante;
        // $matches->idTorneo= $request->idTorneo;
      
        // $matches->MatchesGanador= $request->MatchesGanador;
        //  $matches->estatus= true;
        // $matches->update();

        // return $matches;
        $matches = Matches::select('*')
        ->where('idMatch','=',$id)
        ->update($request->all());
        return $matches;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $matches = Matches::select('*')
        ->where('idMatch','=',$id)
        ->delete();

        return $matches;
    }
}
