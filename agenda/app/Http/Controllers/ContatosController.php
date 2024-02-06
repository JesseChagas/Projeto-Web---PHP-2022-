<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;

class ContatosController extends Controller
{
    public function listarContatos(){
        $contatos = Contatos::all();
           
        return view('contatos.index')->with('contatos', $contatos);
    }

    public function create(){
        return view('contatos.create');
    }

    public function store(Request $req){
        $nomeContato = $req->input('nome');
        $contato = new Contatos();
        $contato->nome = $nomeContato;
        $contato->save();

        return redirect('/contatos');
    }

    public function edit(Contatos $contato){
        return view('contatos.edit')->with('contato', $contato);
    }

    public function update(Contatos $contato, Request $request){
        $contato->nome = $request->nome;
        $contato->save();
        return redirect('/contatos');
    }

}