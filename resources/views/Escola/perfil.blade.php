@extends('layout')
@section('content')
<div class="container">
    <form class="row">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div id="logo-escola" style="background-image: url({{ asset('storage/imgs/logo.png') }})">
                    </div>
                </div>
                <p>Escolaride</p>
                <div id="inputs">
                <div class="row w-100 d-flex align-item-center  justify-content-around">
                    <input type="text" placeholder="Graduação" class="form-control w-25" id="exampleInputPassword1">
                    <input type="text" placeholder="35%" class="form-control w-25" id="exampleInputPassword1">
                </div>
                </div>
                <div class="btn btn-secondary w-100 m-1" type="submit" id="add">+</div>

            </div>
            <div class="col">
                <div class="form-group row ">
                    
                    <label for="desc1">Descrição 1</label>
                    <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatum, voluptas, minus ab aperiam nesciunt illum minima fugit iure qui tLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatum, voluptas, minus ab aperiam nesciunt illum minima fugit iure qui tenetur doloribus corporis quam sit molestiae inventore fugiat non provident.." id="desc1" rows="5"></textarea>
                </div>
                <div class="form-group row">
                    <label for="desc2">Descrição 2</label>
                    <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatum, voluptas, minus ab aperiam nesciunt illum minima fugit iure qui tLorem ipsum dolor sit amet consectetur adipisicing elit. Quasi voluptatum, voluptas, minus ab aperiam nesciunt illum minima fugit iure qui tenetur doloribus corporis quam sit molestiae inventore fugiat non provident.." id="desc2" rows="5"></textarea>
                </div>
                <div class="row">
                    <label for="Fotos">Fotos</label>
                    <div class="row d-flex flex-collumn" id="fotos">
                        <input type="file" id="foto" class="row" name="myfile">

                    </div>

                    <p class="row w-25 btn btn-secondary" id="adicionar">+</p>
                </div>
            </div>
        </div>
        <div class="w-100 row d-flex justify-content-around m-1">
            <button class=" w-25 btn btn-danger">Voltar</button>
            <button class=" w-25 btn btn-primary">Continuar</button>
        </div>
    </form>
    <script>
    document.getElementById('adicionar').addEventListener('click', function() {
        // Cria um novo input de arquivo
        const newInput = document.createElement('input');
        newInput.type = 'file';
        newInput.className = 'row';
        newInput.name = 'myfile';

        // Adiciona o novo input ao container
        document.getElementById('fotos').appendChild(newInput);
    });

    document.getElementById('add').addEventListener('click', function() {
        // Cria uma nova linha para os inputs
        const newRow = document.createElement('div');
        newRow.className = 'row w-100 d-flex align-item-center justify-content-around mt-2';

        // Cria os novos inputs
        const inputGraducao = document.createElement('input');
        inputGraducao.type = 'text';
        inputGraducao.placeholder = 'Graduação';
        inputGraducao.className = 'form-control w-25';
        inputGraducao.name = 'graduacao';

        const inputPercentagem = document.createElement('input');
        inputPercentagem.type = 'text';
        inputPercentagem.placeholder = '35%';
        inputPercentagem.className = 'form-control w-25';
        inputPercentagem.name = 'percentagem';

        // Adiciona os inputs à nova linha
        newRow.appendChild(inputGraducao);
        newRow.appendChild(inputPercentagem);

        // Adiciona a nova linha ao container de inputs
        document.getElementById('inputs').appendChild(newRow);
    });
</script>
    </div>
    @endsection
