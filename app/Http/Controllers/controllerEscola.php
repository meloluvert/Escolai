<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escola;
use App\Models\Endereco;

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
    $end = new Endereco();

    $dados->name = $request->input('nome');
    $dados->telefone = $request->input('telefone');
    $dados->email = $request->input('email');
    $dados->password = $request->input('senha');
    $dados->endereco = $request->input('endereco');
    $dados->media_mensalidade = $request->input('mediaMensalidade');
    $dados->whatsapp = $request->input('whatsapp');
    $dados->instagram = $request->input('instagram');


    $end->cep = $request->input('cep');
    $end->bairro = $request->input('bairro');
    $end->rua = $request->input('endereco');
    $end->cidade = $request->input('cidade');
    $end->estado = $request->input('estado');
    $end->save();

    $dados->endereco = $end->id;
   
    $dados->descricao1 = ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est provident mollitia vero dolor perspiciatis molestias dignissimos eos culpa neque nihil porro odio sed suscipit, excepturi voluptatum vel.em ipsum dolor, sit amet consectetur adipisicing elit. Est provident mollitia vero dolor perspiciatis molestias dignissimos eos culpa neque nihil porro odio sed suscipit, excepturi voluptatum vel. Facere, assumenda? Sunt?';
    $dados->descricao2 = ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est provident mollitia vero dolor perspiciatis molestias dignissimos eos culpa neque nihil porro odio sed suscipit, excepturi voluptatum vel';
    $dados->save();

    return redirect('/contatos')->with('success', 'Novo contato cadastrado com sucesso.');
}
public function verEscola(string $id){
    $dados = Escola::find($id);
    return view('Escola/informacoes', compact('dados'));

}

}