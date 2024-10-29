@extends('layout')
@section('content')
    <div>
        <h3 style="display:flex; align-items: center; justify-content: center;">Anúncio</h3>
    </div>
    <div style="display:flex; align-items: center; justify-content: center;">

        <form>
            <div class="row" style="display:flex; align-items: center; justify-content: center;">
                <div class="col">
                    <div class="mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Título</label>
                        <input type="text" placeholder="lorem ipsum" class="form-control" id="titulo">
                    </div>
                    <div class="mb-3" style="align-items: center; justify-content: center;">
                        <label for="exampleInputEmail1" class="form-label">Descrição</label>
                        <textarea name="descricao" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta doloremque, incidunt ab optio deserunt quia voluptatum magnam explicabo provident maxime rerum error repudiandae ex mollitia unde sapiente? Voluptatum, debitis?" id="" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <div id="logo-escola" style="background-image: url({{ asset('storage/imgs/logo.png') }})">
                        </div>
                    </div>
                    

                        <div id="nome-logo-escola">NOME</div>
                        <div>
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <label for="exampleInputEmail1" class="form-label">Tempo</label>
                                    </div>
                                    <div class="col">
                                        <input type="number" placeholder="5" class="form-control" id="tempo">
                                    </div>
                                    <div class="col">
                                        <select name="" class="form-control" id="">

                                            <option value="meses">meses</option>
                                            <option value="dias">dias</option>
                                            <option value="semanas">semanas</option>
                                        </select>

                                    </div>


                                </div>
                            </div>
                            <div class="row d-flex align-items-center ">
                                <label for="exampleInputEmail1" class="col-3 form-l abel">Alcance</label>
                                <input type="number" placeholder="1000" class="col form-control" id="alcance">
                                <span class="col-3">pessoas</p>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Somente da minha cidade</label>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around">
                        <button type="submit" class="col-2 btn btn-danger">Cancelar</button>
                        <button type="submit" class="col-2 btn btn-primary">Pagamento</button>
                    </div>
        </form>
    </div>
@endsection
