    <form action="{{route('gravaNovaEscola')}}" method="POST">
        @csrf
        <div class="row" style="display:flex">
            <div class=" col mb-3" style="align-items: center; justify-content: center;">
                <label for="nome" class="form-label">Nome*</label>
                <input type="text" name="nome" placeholder="Zinédine Zidane" class="form-control" id="nome" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col" style="align-items: center; justify-content: center;">
                <label for="telefone" class="form-label">Telefone*</label>
                <input type="tel" name="telefone" placeholder="(35) 01234-5678" class="form-control" id="telefone" required>
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="email" class="form-label">E-mail*</label>
                <input type="email" name="email" placeholder="zidane@email.com" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="col">
                <label for="avatar" class="form-label">Foto de Perfil*</label>
                <input type="file" name="avatar" required id="avatar">
            </div>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="senha" class="form-label">Senha*</label>
            <input type="password" name="senha" placeholder="********" class="form-control" id="senha" required>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="senhaConfirm" class="form-label">Confirmar Senha*</label>
            <input type="password" class="form-control" placeholder="********" id="senhaConfirm" required>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="cep" class="form-label">CEP*</label>
            <input type="tel" class="form-control"  placeholder="77889-99" name="cep" id="cep" required>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="endereco" class="form-label">Endereço*</label>
                <input type="text" class="form-control" id="endereco" placeholder="Rua Romário" name="endereco" id="endereco" aria-describedby="emailHelp" required>
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="numcasa" class="form-label">Número*</label>
                <input type="number" class="form-control" placeholder="11" name="numero" id="numero" required>
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="estado" class="form-label">Estado*</label>
                <input type="text" class="form-control" id="uf" placeholder="MG" name="estado" id="estado" aria-describedby="emailHelp" >
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="cidade" class="form-label">Cidade*</label>
                <input type="text" placeholder="Varginha" id="cidade" class="form-control" name="cidade" id="cidade">
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="bairro" class="form-label">Bairro*</label>
                <input type="text" name="bairro" id="bairro" placeholder="Damasco" " class="form-control">
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="mensalidade" class="form-label">Média de Mensalidade*</label>
                <input type="number" placeholder="R$700,00" class="form-control" name="mediaMensalidade" id="mensalidade" required>
            </div>
        </div>
        
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" placeholder="escola" class="form-control" name="instagram" id="instagram">
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="whatsapp" class="form-label">Whatsapp</label>
                <input type="tel" placeholder="(35) 3221-0000" class="form-control" name="whatsapp" id="whatsapp">
            </div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Concordo com a Política de Privacidade e Termos de
                Uso</label>
        </div>
        <button type="submit" class="btn btn-danger">Cancelar</button>
        <button type="submit" class="btn btn-primary">Cadastrar-se</button>
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
    </form>
