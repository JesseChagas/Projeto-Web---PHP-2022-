<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    
    public function listarSeries(){
        $series = Serie::all();        
        return view('series.index', ['series'=>$series]);
        
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $req){
        $nomeSerie = $req->nome;
        $serie = new Serie;
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
    }

    public function edit(Serie $serie){
        return view('series.edit')->with('serie', $serie);
    }

    public function update(Serie $serie, Request $request){
        $serie->nome = $request->nome;
        $serie->save();
        return redirect('/series');
    }
}
