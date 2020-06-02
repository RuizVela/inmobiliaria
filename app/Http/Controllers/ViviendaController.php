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
    public function search(Request $request)
    {
        if($request->maximo == 0)
        {
            $request->maximo = 100000000;
        }
        $viviendas = vivienda::all()
        ->where('precio',">=", $request->minimo)
        ->where('precio',"<=",$request->maximo)
        ->where('habitaciones',">=",$request->habitaciones)
        ->where('construcción',">=",$request->construccion);
        return view('viviendas',['viviendas'=>$viviendas]);
    }
}
