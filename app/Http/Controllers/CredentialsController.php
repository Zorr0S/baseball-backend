<?php

namespace App\Http\Controllers;

//Modelo que uiliza eel cotrolador

use App\Models\Credential;
use Illuminate\Http\Request;

class CredentialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $credential = Credential::all();
        return $credential;
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
        $credential= new Credential();
        $credential->Nombre = $request->Nombre;
        $credential->Apellidos = $request->Apellidos;
        $credential->IDTipoJugador = $request->IDTipoJugador;
        $credential->correo= $request->correo;
        
        $credential->save();
        
        return $credential;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $credential = Credential::where('id',$id)->get();
        return   $credential;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Credential $credential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credential $credential)
    {
        //
        $credential = Credential::find($request->id);
        $credential->Nombre = $request->Nombre;
        $credential->Apellidos = $request->Apellidos;
        $credential->IDTipoJugador = $request->IDTipoJugador;
        
        $credential->update();
        return $credential;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credential $credential)
    {
        //
    }
}
