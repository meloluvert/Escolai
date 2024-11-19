@extends('layout')
@section('content')
@component('anuncio')
@endcomponent
    
<div class="row m-0" >
        <div class="col-2 p-3 ">
            <h4>Filtro:</h4>
            <button class="btn btn-primary">Limpar Filtros</button>
            <div>
                <h4>Bairro:</h4>
                <input type="text" class="form-control" placeholder="Digite seu Bairro">
            </div>
            <div>
                <h4>Etapa de Ensino:</h4>
                <select name="etapa" class="form-control" id="etapa">
                    <option value="infantil">Ensino Infantil</option>
                    <option value="fundamental1">Ensino Fundamental 1</option>
                    <option value="fundamental2">Ensino Fundamental 2</option>
                    <option value="medio">Ensino Médio</option>
                    <option value="superior">Ensino Superior</option>
                </select>
                @if (auth()->check() && auth()->user()->name)
    {{ auth()->user()->name }}
@endif  

            </div>
            <div>
                <h4>Série:</h4>
                <select name="etapa" class="form-control id="etapa">
                    <option value="1">1ª Série</option>
                    <option value="2">2ª Série</option>
                    <option value="3">3ª Série</option>
                    <option value="4">4ª Série</option>
                    <option value="5">5ª Série</option>
                    <option value="6">6ª Série</option>
                    <option value="7">7ª Série</option>
                    <option value="8">8ª Série</option>
                    <option value="9">9ª Série</option>
                    <option value="10">1ª Série Médio</option>
                    <option value="20">2ª Série Médio</option>
                    <option value="30">3ª Série Médio</option>
                </select>
            </div>
            <div>
                <h4>Valor da Mensalidade:</h4>
                <p>R$ 1,00 até R$ 10.000,00</p>
                <input type="range" >
            </div>
            <div>
                <h4>Turno:</h4>
                <div>
                <input type="checkbox" class="form-check-input" id="manha"/> <label    class="form-check-label" for="manha">Manhã</label>
</div>
<div>
                <input type="checkbox" class="form-check-input" id="tarde"/> <label    class="form-check-label" for="tarde">Tarde</label>
                </div>
                <div>
                <input type="checkbox" class="form-check-input" id="integral"/> <label class="form-check-label" for="integral">Integral</label>
                </div>
                <div>
                
                <input type="checkbox" class="form-check-input" id="semi"/> <label class="form-check-label" for="semi">Semi-Integral</label>
                </div>
                <div>
                
                <input type="checkbox" class="form-check-input" id="noturno"/> <label  class="form-check-label" for="noturno">Noturno</label>
                </div>
                <div>
                <input type="checkbox" class="form-check-input" id="sabado"/> <label   class="form-check-label" for="sabado">Sábado</label>
                </div>
            </div>
        </div>
        
        <div class="row col-10 justify-content-around p-0 m-0">
            @foreach ($dados as $item)
                
            <a class="card col-3 mx-1 my-3 link-card" href="/escola/{{$item->id}}">
                <img class="card-img-top" src="{{ asset('storage/imgs/imagemTeste.png') }}" alt="Card image cap">
                
                <div class="card-body">
                    <div class="d-flex justify-content-right align-items-center ">
                        <img src="{{asset('storage/imgs/localizacao.png') }}" id="localizacaoImagem" alt="">
                        <p class="m-0">{{$item->cidade}}</p>
                    </div>
                    <div>
                        <ul>
                            @foreach ($item->qualidades as $i)
                            <li>{{$i}}</li>
                            @endforeach
                        </ul>
                    </div>  
                    <p class="card-text">{{$item->descricao1}}</p>
                    <p class="card-text">Média da mensalidade: R$
                        <span>{{$item->media_mensalidade}}</span>
                    </p>
                    <div id="fundo-estrelas-total">
                        <div id="fundo-estrelas-amarelas" class="d-flex flex-row justify-content-around">
                            @for ($i = 0; $i < 5; $i++)
                                <span
                                    class="star-icon {{ $i < floor($item->nota) ? 'full' : ($i < ceil($item->nota) ? 'half' : '') }}">☆</span>
                            @endfor
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
</div>
        <div>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only"></span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only"></span>
      </a>
    </li>
  </ul>
</nav>
        </div>
@endsection
