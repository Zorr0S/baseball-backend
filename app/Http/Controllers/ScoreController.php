<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $scores= Score::all();
       
        return $scores;
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
        // $scores = new Score();
        // $scores->idTorneo= $request->idTorneo;
        // $scores->Nombre = $request->Nombre;
        // $scores->ScoreCasa = $request->ScoreCasa;
        // $scores->ScoreVisitante = $request->ScoreVisitante;
        //  //ScoreGanador,
        //  $scores->estatus= true;
        // $scores->save();
        // return $scores;

        return Score::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $scores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $scores = Score::select('*')
        ->where('idJugador','=',$id)
        // ->where('estatus','=',$status)
        ->get();

        return $scores;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $scores
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $scores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $scores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $scores=Score::find($request->id);
        // $scores->Nombre = $request->Nombre;
        // $scores->ScoreCasa = $request->ScoreCasa;
        // $scores->ScoreVisitante = $request->ScoreVisitante;
        // $scores->idTorneo= $request->idTorneo;
      
        // $scores->ScoreGanador= $request->ScoreGanador;
        //  $scores->estatus= true;
        // $scores->update();

        // return $scores;
        $scores = Score::select('*')
        ->where('idJugador','=',$id)
        ->update($request->all());
        return $scores;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $scores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $scores = Score::select('*')
        ->where('idJugador','=',$id)
        ->delete();

        return $scores;
    }
}
