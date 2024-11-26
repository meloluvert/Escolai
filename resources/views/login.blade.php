@extends('layout')

@section('content')
    <div class="container py-2">
        <form method="POST" action="{{route('escola.login.submit')}}">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" placeholder="lucas@gmail.com" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1"  class="form-label">Senha</label>
                <input type="password" placeholder="***************" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Deixe-me Conectado</label>
                <p>Não tem cadastro? <a href="/cadastro">Cadastre-se</a></p>
            </div>
            <button type="button" class="btn btn-danger">Cancelar</button>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>  
@endsection
