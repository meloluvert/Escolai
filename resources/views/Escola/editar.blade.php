@extends('layout')
@section('content')
    <div>
        <h3 style="display:flex; align-items: center; justify-content: center;">EDITE</h3>
    </div>
    <div id="escola" class="my-1">
        <div style="display:flex; align-items: center; justify-content: center;">
            <form action="/escolaEdit/{{Auth::guard('escola')->user()->id}}" method="POST">
                @csrf
                <div class="row" style="display:flex">
                    <div class=" col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Nome*</label>
                        <input type="text" name="nome" value="{{$dados->name}}" class="form-control" id="nome"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3 col" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Telefone*</label>
                        <input type="tel" name="telefone" value="{{$dados->telefone}}" class="form-control" id="numero"
                            required>
                    </div>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">E-mail*</label>
                        <input type="email" name="email" value="{{$dados->email}}" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Foto de Perfil*</label>
                        <input type="file" name="avatar" required id="avatar">
                    </div>
                </div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputPassword1" class="form-label">Senha*</label>
                    <input type="password" name="senha" value="********" class="form-control" id="exampleInputPassword1"
                        required>
                </div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputPassword1" class="form-label">Confirmar Senha*</label>
                    <input type="password" class="form-control" value="********" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3" style="align-items: center; justify-content: center;">
                    <label for="exampleInputEmail1" class="form-label">CEP*</label>
                    <input type="tel" class="form-control" value="{{$dados->cep}}" name="cep" id="cep" required>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Endereço*</label>
                        <input type="text" class="form-control" value="" name="endereco" id="endereco"
                            aria-describedby="emailHelp" required>
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Número*</label>
                        <input type="number" class="form-control" value="{{$dados->numero}}" name="numero" id="numcasa" required>
                    </div>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Estado*</label>
                        <input type="text" class="form-control" value="" name="estado" id="uf"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Cidade*</label>
                        <input type="text" value="" class="form-control" name="cidade" id="cidade">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="bairro" class="form-label">Bairro*</label>
                <input type="text" name="bairro" id="bairro" placeholder="Damasco"  class="form-control">
            </div>
                </div>
                <div class="row" style="display:flex">      
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Média de Mensalidade*</label>
                        <input type="number" value="{{$dados->media_mensalidade}}" class="form-control" name="mediaMensalidade"
                            id="mensalidade" required>
                    </div>
                </div>
                <div class="row" style="display:flex">
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Instagram</label>
                        <input type="text" value="{{$dados->instagram}}" class="form-control" name="instagram" id="instagram">
                    </div>
                    <div class="col mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Whatsapp</label>
                        <input type="tel" value="{{$dados->whatsapp}}" class="form-control" name="whatsapp"
                            id="whatsapp">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Concordo com a Política de Privacidade e Termos de
                        Uso</label>
                </div>
                <button type="submit" class="btn btn-danger">Cancelar</button>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
    </div>
    <script>
			$("#cep").blur(function(){
				var cep = this.value.replace(/[^0-9]/, "");
				
				if(cep.length != 8){
					return false;
				}
		
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
			
				$.getJSON(url, function(dadosRetorno){
					try{
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
		</script>
@endsection
