@extends('layout')
@section('content')
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail com mais ninguém.
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Deixe-me Conectado</label>
  </div>
  
  <button type="button" class="btn btn-danger">Cancelar</button>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>