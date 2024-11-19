@extends('layout')

@section('content')
    <div>
        <h3 style="display:flex; align-items: center; justify-content: center;">EDITE</h3>
    </div>
    <div  id="escola" class="my-1">
        <div style="display:flex; align-items: center; justify-content: center;">
            <form>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Nome*</label>
                        <input type="text" value="Amaral" class="form-control" id="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Telefone*</label>
                        <input type="number" value="(35) 01234-5678" class="form-control" id="numero">
                    </div>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">E-mail*</label>
                        <input type="email" value="amaral@email.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div>
                        <label for="exampleInputEmail1" class="col form-label">Foto de Perfil*</label>
                        <input type="file" name="avatar" id="avatar">
                    </div>
                </div>
                <div class="col mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputPassword1" class="form-label">Senha*</label>
                    <input type="password" value="********" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Senha*</label>
                    <input type="password" value="********" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputEmail1" class="form-label">CEP*</label>
                    <input type="number" value="00000-000" class="form-control" id="cep">
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Endereço*</label>
                        <input type="text" value="Rua Renato Gaúcho" class="form-control" id="endereco" aria-describedby="emailHelp">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Número*</label>
                        <input type="number" value="07" class="form-control" id="numcasa">
                    </div>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Estado*</label>
                        <input type="text" value="MG" class="form-control" id="estado" aria-describedby="emailHelp">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">cidade*</label>
                        <input type="text" value="Varginha" class="form-control" id="cidade">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Concordo com a Política de Privacidade e Termos de
                        Uso</label>
                </div>
                <button type="submit" href="/" class="btn btn-danger">Cancelar</button>
                <button type="submit" class="btn btn-primary">Edite</button>
            </form> 
        </div>
    </div>
  
@endsection
