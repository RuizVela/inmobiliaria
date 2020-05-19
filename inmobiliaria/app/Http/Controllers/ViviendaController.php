<?php

namespace App\Http\Controllers;

use App\vivienda;
use Illuminate\Http\Request;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function search(Request $request)
    {
        $viviendas = vivienda::all()
        ->where('precio',">=", $request->minimo)
        ->where('precio',"<=",$request->maximo)
        ->where('habitaciones',">=",$request->habitaciones)
        ->where('construcción',">=",$request->construccion);
        return view('viviendas',['viviendas'=>$viviendas]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function show(vivienda $vivienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function edit(vivienda $vivienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vivienda $vivienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vivienda  $vivienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(vivienda $vivienda)
    {
        //
    }
}
