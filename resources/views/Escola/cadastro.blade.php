    <form>
        <div class="row" style="display:flex">
            <div class=" col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Nome*</label>
                <input type="text" name="nome" placeholder="Zinédine Zidane" class="form-control" id="nome" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Telefone*</label>
                <input type="tel" name="telefone" placeholder="(35) 01234-5678" class="form-control" id="numero" required>
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">E-mail*</label>
                <input type="email" name="email" placeholder="zidane@email.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">Foto de Perfil*</label>
                <input type="file" name="avatar" required id="avatar">
            </div>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="exampleInputPassword1" class="form-label">Senha*</label>
            <input type="password" name="senha" placeholder="********" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="exampleInputPassword1" class="form-label">Confirmar Senha*</label>
            <input type="password" class="form-control" placeholder="********" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="exampleInputEmail1" class="form-label">CEP*</label>
            <input type="tel" class="form-control" placeholder="77889-99" name="cep" id="cep" required>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Endereço*</label>
                <input type="text" class="form-control" placeholder="Rua Romário" name="endereco" id="endereco" aria-describedby="emailHelp" required>
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Número*</label>
                <input type="number" class="form-control" placeholder="11" name="numero" id="numcasa" required>
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Estado*</label>
                <input type="text" class="form-control" placeholder="MG" name="estado" id="estado" aria-describedby="emailHelp" >
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Cidade*</label>
                <input type="text" placeholder="Varginha" class="form-control" id="cidade">
            </div>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Nº de Alunos*</label>
                <input type="number" placehoder="77 00" class="form-control" name="qtdAlunos" id="nalunos" required>
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Média de Mensalidade*</label>
                <input type="number" placeholder="R$700,00" class="form-control" name="mediaMensalidade" id="mensalidade" required>
            </div>
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="exampleInputEmail1" class="form-label">Nome do Coordenador*</label>
            <input type="text" placeholder="Ronaldo" class="form-control" id="nomecoordenador">
        </div>
        <div class="mb-3" style="align-items: center; justify-content: center;">
            <label for="exampleInputEmail1" class="form-label">CPF do Coordenador*</label>
            <input type="tel" placeholder="123.456.789-10" class="form-control" name="nomeCoordenador" id="cpfcoordenador" required>
        </div>
        <div class="row" style="display:flex">
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Instagram</label>
                <input type="text" placeholder="escola" class="form-control" name="instagram" id="instagram">
            </div>
            <div class="col mb-3" style="align-items: center; justify-content: center;">
                <label for="exampleInputEmail1" class="form-label">Whatsapp</label>
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
    </form>
