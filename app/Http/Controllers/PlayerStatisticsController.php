<?php

namespace App\Http\Controllers;

use App\Models\PlayerStatistics;
use Illuminate\Http\Request;

class PlayerStatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playerStatistics = PlayerStatistics::all();
        return $playerStatistics;
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
        $playerStatistics = new PlayerStatistics();
        $playerStatistics->IDJugador= $request->IDJugador;

        $playerStatistics->JuegosGanados= $request->JuegosGanados;
        $playerStatistics->JuegosPerdidos= $request->JuegosPerdidos;
        $playerStatistics->Efectividad= $request->Efectividad;
        $playerStatistics->JuegosLanzados= $request->JuegosLanzados;
        $playerStatistics->Aperturas= $request->Aperturas;
        $playerStatistics->JuegosCompletados= $request->JuegosCompletados;
        $playerStatistics->JuegosBlanqueados= $request->JuegosBlanqueados;

        $playerStatistics->save();
        return $playerStatistics;
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerStatistics  $playerStatistics
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerStatistics $playerStatistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerStatistics  $playerStatistics
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerStatistics $playerStatistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlayerStatistics  $playerStatistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlayerStatistics $playerStatistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerStatistics  $playerStatistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerStatistics $playerStatistics)
    {
        //
    }
}
