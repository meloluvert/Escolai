<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;

class controllerEscola extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Escola::all();
        foreach ($dados as $item) {
            $item->qualidades = ['pública','tem o eduardo', 'ótimo'];
            $item->cidade = 'Varginha';
        };
        return view('home', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

public function store(Request $request){

    $dados = new Escola();

    $dados->name = $request->input('nome');
    $dados->telefone = $request->input('telefone');
    $dados->email = $request->input('email');
    $dados->password = $request->input('senha');
    $dados->endereco = $request->input('endereco');
    $dados->media_mensalidade = $request->input('mediaMensalidade');
    $dados->whatsapp = $request->input('whatsapp');
    $dados->instagram = $request->input('instagram');
    $dados->endereco = '11';
    $dados->descricao1 = '';
    $dados->descricao2 = '';
    $dados->save();

    return redirect('/contatos')->with('success', 'Novo contato cadastrado com sucesso.');
}

}