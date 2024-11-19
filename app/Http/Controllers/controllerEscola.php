<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Escola;
use App\Models\Endereco;

class ControllerEscola extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:escola');
    }

    public function index()
    {
        $dados = Escola::all();
        foreach ($dados as $item) {
            $item->qualidades = ['pública','tem o eduardo', 'ótimo'];
            $item->cidade = 'Varginha';
        }
        return view('home', compact('dados'));
    }

    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request)
    {
        // Validação dos dados
        // $request->validate([
        //     'nome' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'senha' => 'required|string|min:6',
        // ]);

        // Criando o endereço
        $end = new Endereco();
        $end->cep = $request->input('cep');
        $end->bairro = $request->input('bairro');
        $end->rua = $request->input('endereco');
        $end->cidade = $request->input('cidade');
        $end->estado = $request->input('estado');
        $end->save();

        // Criando a escola
        $dados = new Escola();
        $dados->name = $request->input('nome');
        $dados->telefone = $request->input('telefone');
        $dados->email = $request->input('email');
        $dados->password = Hash::make($request->input('senha'));
        $dados->endereco = $end->id;  // Relacionando o endereço com a escola
        $dados->media_mensalidade = $request->input('mediaMensalidade');
        $dados->whatsapp = $request->input('whatsapp');
        $dados->instagram = $request->input('instagram');
        $dados->descricao1 = 'Lorem ipsum dolor sit amet.';
        $dados->descricao2 = 'Lorem ipsum dolor sit amet.';
        $dados->save();

        return redirect('/home')->with('success', 'Novo contato cadastrado com sucesso.');
    }

    public function verEscola(string $id)
    {
        $dados = Escola::find($id);
        return view('Escola/informacoes', compact('dados'));
    }
}
