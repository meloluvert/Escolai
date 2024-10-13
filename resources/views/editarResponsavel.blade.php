@extends('layout')
<div>
  <h3 style="display:flex; align-items: center; justify-content: center;">EDITAR</h3>
</div>
<div style="display:flex; gap: 20%; align-items: center; justify-content: center;">
  <div>
    <h4>RESPONSÁVEL</h4>
  </div>
</div>
<div style="display:flex; align-items: center; justify-content: center;">
  <form>
    <div style="display:flex">
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Nome*</label>
        <input type="text" class="form-control" id="nome" aria-describedby="emailHelp">
      </div>
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Telefone*</label>
        <input type="number" class="form-control" id="numero">
      </div>
    </div>
    <div style="display:flex">
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">E-mail*</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div>
        <label for="exampleInputEmail1" class="form-label">Foto de Perfil*</label>
        <input type="file" name="avatar" id="avatar">
      </div>
    </div>
    <div class="mb-3" style="align-items: center; justify-content: center;">
      <label for="exampleInputPassword1" class="form-label">Senha*</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3" style="align-items: center; justify-content: center;">
      <label for="exampleInputPassword1" class="form-label">Confirmar Senha*</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3" style="align-items: center; justify-content: center;">
      <label for="exampleInputEmail1" class="form-label">CEP*</label>
      <input type="number" class="form-control" id="cep">
    </div>
    <div style="display:flex">
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Endereço*</label>
        <input type="text" class="form-control" id="endereco" aria-describedby="emailHelp">
      </div>
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Número*</label>
        <input type="number" class="form-control" id="numcasa">
      </div>
    </div>
    <div style="display:flex">
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Estado*</label>
        <input type="text" class="form-control" id="estado" aria-describedby="emailHelp">
      </div>
      <div class="mb-3" style="align-items: center; justify-content: center;">
        <label for="exampleInputEmail1" class="form-label">Cidade*</label>
        <input type="text" class="form-control" id="cidade">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Cancelar</button>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>