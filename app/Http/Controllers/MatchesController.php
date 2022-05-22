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
        $matches =  Matches::all();
       
        return $matches;
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
        $matches = new Matches();
        $matches->idTorneo= $request->idTorneo;
        $matches->Nombre = $request->Nombre;
        $matches->EquipoCasa = $request->EquipoCasa;
        $matches->EquipoVisitante = $request->EquipoVisitante;
         //EquipoGanador,
         $matches->estatus= true;
        $matches->save();
        return $matches;
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
        $matches =  Matches::where('id',$id)->get();
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
    public function update(Request $request, Matches $matches)
    {
        //
        $matches=Matches::find($request->id);
        $matches->Nombre = $request->Nombre;
        $matches->EquipoCasa = $request->EquipoCasa;
        $matches->EquipoVisitante = $request->EquipoVisitante;
        $matches->idTorneo= $request->idTorneo;
      
        $matches->EquipoGanador= $request->EquipoGanador;
         $matches->estatus= true;
        $matches->update();

        return $matches;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matches $matches)
    {
        //
    }
}
