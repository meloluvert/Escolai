<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Responsavel;


class controllerResponsavel extends Controller
{
    public function store(Request $request){
        $dados = new Responsavel();
        $dados->name = $request->input('name');
        $dados->email = $request->input('email');
        $dados->password = $request->input('password');
        $dados->telefone = $request->input('telefone');
        $dados->foto_de_perfil = '1';
        $dados->save();
        return redirect('/')->with('success', 'Novo contato cadastrado com sucesso.');
    }

}
