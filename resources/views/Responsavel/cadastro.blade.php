<form>
    @csrf
    <div class="row" style="display:flex">
        <div class="col mb-3" style="align-items: center; justify-content: center;">
            <label for="nome" class="form-label">Nome*</label>
            <input type="text" placeholder="Amaral" class="form-control" id="nome" aria-describedby="emailHelp">
        </div>
        <div class="col mb-3" style="align-items: center; justify-content: center;">
            <label for="telefone" class="form-label">Telefone*</label>
            <input type="number" placeholder="(35) 01234-5678" class="form-control" id="telefone">
        </div>
    </div>
    <div class="row" style="display:flex">
        <div class="col mb-3" style="align-items: center; justify-content: center;">
            <label for="email" class="form-label">E-mail*</label>
            <input type="email" placeholder="amaral@email.com" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div>
            <label for="avatar" class="col form-label">Foto de Perfil*</label>
            <input type="file" name="avatar" id="avatar">
        </div>
    </div>
    <div class="col mb-3" style="align-items: center; justify-content: center;">
        <label for="senha" class="form-label">Senha*</label>
        <input type="password" placeholder="********" class="form-control" id="senha">
    </div>
    <div class="col mb-3" style="align-items: center; justify-content: center;">
        <label for="senhaConfirm" class="form-label">Confirmar Senha*</label>
        <input type="password" placeholder="********" class="form-control" id="senhaConfirm">
    </div>
    
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Concordo com a Política de Privacidade e Termos de
            Uso</label>
    </div>
    <button type="submit" href="{{route('inicio')}}" class="btn btn-danger">Cancelar</button>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form> 