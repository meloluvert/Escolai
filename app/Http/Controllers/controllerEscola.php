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
            $item->qualidades = ['Área de Lazer','Piscina', 'Quadra'];
            $item->cidade = 'Varginha';
        }
        return view('home', compact('dados'));
    }

    public function create()
    {
        return view('cadastro');
    }

    public function edit(string $id){
        $this->middleware('auth');
        $dados = Escola::find($id);

        if(isset($dados)){
            $end = Endereco::find($id);
            $dados->cep = $end->cep;
            $dados->numero = $end->numero;
            return view('Escola/editar', compact('dados'));
        }
        return view('Escola/editar', compact('dados'));
    }

    public function update(string $id, Request $request){
        $this->middleware('auth');
        
        
        $end = Endereco::find($id);
        $end->cep = $request->input('cep');
        $end->bairro = $request->input('bairro');
        $end->rua = $request->input('endereco');
        $end->cidade = $request->input('cidade');
        $end->estado = $request->input('estado');
        $end->numero = $request->input('numero');
        $end->save();
        // Criando a escola
        $dados = Escola::find($id);
        if(isset($dados)){
            $dados->name = $request->input('nome');
            $dados->telefone = $request->input('telefone');
            $dados->email = $request->input('email');
            $dados->password = Hash::make($request->input('senha'));
            $dados->endereco = $end->id;  // Relacionando o endereço com a escola
            $dados->media_mensalidade = $request->input('mediaMensalidade');
            $dados->whatsapp = $request->input('whatsapp');
            $dados->instagram = $request->input('instagram');
            return redirect('/')->with('success', ' alterado com sucesso');
        }

        return redirect('/')->with('danger', 'não há escola com seu id');
       


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
        $end->numero = $request->input('numero');
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
        $dados->descricao1 = 'Lorem ipsum dolor sit amet. orem ipsum dolor sit amet consectetur adipisicing elit. Soluta sed tempora sequi corporis illo vel ipsum fugiat. Maxime facere, inventore iste laudantium est eorem ipsum dolor sit amet consectetur adipisicing elit. Soluta sed tempora sequi corporis illo vel ipsum fugiat. Maxime facere, inventore iste laudantium est expedita praesentium possimus eos, soluta consequuntur quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. .';
        $dados->descricao2 = 'Lorem ipsum dolor sit amet. orem ipsum dolor sit amet consectetur adipisicing elit. Soluta sed tempora sequi corporis illo vel ipsum fugiat. Maxime facere, inventore iste laudantium est eorem ipsum dolor sit amet consectetur adipisicing elit. Soluta sed tempora sequi corporis illo vel ipsum fugiat. Maxime facere, inventore iste laudantium est expedita praesentium possimus eos, soluta consequuntur quos. Lorem ipsum dolor sit amet, consectetur adipisicing elit. .';
        $dados->save();

        return redirect('/')->with('success', 'Novo contato cadastrado com sucesso.');
    }

    public function verEscola(string $id)
    {
        $dados = Escola::find($id);
        return view('Escola/informacoes', compact('dados'));
    }
    public function destroy(string $id){
        $this->middleware('auth');
        $dados =  Agenda:: find($id); 
        if (isset($dados)) { 
            $dados->delete(); 
            return redirect('/contatos')->with('success', 'Contato deletado com sucesso.'); 
        } 
            return redirect('/contatos')->with('danger', 'Erro ao tentar deletar contato.');
        }
}
