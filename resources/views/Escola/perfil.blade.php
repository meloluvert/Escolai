@extends('layout')
@section('content')
    <form class="row">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div id="logo-escola" style="background-image: url({{ asset('storage/imgs/logo.png') }})">
                    </div>
                </div>
                <p>Escolaride</p>
                <div class="row w-100 d-flex align-item-center  justify-content-around">
                    <input type="text" placeholder="Graduação" class="form-control w-25" id="exampleInputPassword1">
                    <input type="text" placeholder="35%" class="form-control w-25" id="exampleInputPassword1">
                    <button class="btn btn-primary w-25" type="submit">+</button>
                </div>

            </div>
            <div class="col">
                <div class="form-group row ">
                    <label for="desc1">Descrição 1</label>
                    <textarea class="form-control" id="desc1" rows="3"></textarea>
                </div>
                <div class="form-group row">
                    <label for="desc2">Descrição 2</label>
                    <textarea class="form-control" id="desc2" rows="3"></textarea>
                </div>
                <div class="row">
                    <label for="Fotos">Fotos</label>
                    <div class="row">
                        <input type="file" id="foto" class="col" name="myfile">

                    <button class="col w-25 btn btn-primary">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-25 row d-flex justify-content-center">
            <button class="col  btn btn-danger">Volatr</button>
            <button class="col btn btn-primary">COntinuar</button>
        </div>
    </form>
@endsection
