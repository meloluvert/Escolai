@extends('layout')
@section('content')
        <div class="row justify-content-around m-0">
@for ($i = 0; $i < 6; $i++)
            <div class="card col-3 mx-1 my-3 " style="">
                <img class="card-img-top" src="{{ asset('storage/imgs/imagemTeste.png') }}" alt="Card image cap">
                
                <div class="card-body">
                    <div class="d-flex justify-content-right align-items-center ">
                        <img src="{{asset('storage/imgs/localizacao.png') }}" id="localizacaoImagem" alt="">
                        <p class="m-0">Varginha-MG</p>
                    </div>
                    <div>
                        <ul>
                            <li>Sistema Ph</li>
                            <li>Quadra e Piscina</li>
                            <li>Cursos internos de extensão</li>
                        </ul>
                    </div>  
                    <p class="card-text">O Marista oferece uma educação integral, focada no desenvolvimento
                        humano, qualidade de ensino e incentivo ao protagonismo e solidariedade. Com mais de 200
                        anos de história, a rede prepara estudantes para o futuro através de experiências dentro
                        e fora da sala de aula.</p>
                    <p class="card-text">Média da mensalidade: R$
                        <span>1000</span>
                    </p>
                    <div id="fundo-estrelas-total">
                        <div id="fundo-estrelas-amarelas" class="d-flex flex-row justify-content-around">
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon full">☆</span>
                            <span class="star-icon half">☆</span>
                            <span class="star-icon">☆</span>
                            {{-- PARA DEPOIS QUE O BANCO DE DADOS FOR IMPLEMENTADO --}}
                            {{-- @for ($i = 0; $i < 5; $i++)
                                <span
                                    class="star-icon {{ $i < floor($item->nota) ? 'full' : ($i < ceil($item->nota) ? 'half' : '') }}">☆</span>
                            @endfor --}}
                        </div>
                    </div>
                </div>
               
            </div>
            @endfor
        </div>
@endsection
