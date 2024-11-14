@extends('layout')
@section('content')
    <div class="container">
        <div>

            <div class="d-flex flex-row w-100 justify-content-between header-perfil">
                <div class="d-flex align-items-center">
                    <h1 class="titulo-perfil">{{$dados->name}}</h1>
                </div>
                <div>
                    <div class=" d-flex justify-content-around flex-grow-2 align-items-">
                        <a class="" href="">
                        <img src="{{ asset('storage/imgs/whatsapp.png') }}" class="footer-icon" style="display: inline-block;"
                            alt="">
                        </a>
                        <a href="https://instagram.com/{{$dados->instagram}}">
                        <img src="{{ asset('storage/imgs/instagram.png') }}" class="footer-icon"
                            style="display: inline-block;">
                        <a href=""></a>
                    </div>
                    <div id="fundo-estrelas-amarelas" class="estrelas-perfil d-flex flex-row justify-content-around">
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

            <div class="row">
                <div id="carouselControls" class="carousel slide col" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block" src="{{ asset('storage/imgs/fotoMaristaTeste.png') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block" src="{{ asset('storage/imgs/fotoMaristaTeste.png') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block" src="{{ asset('storage/imgs/fotoMaristaTeste.png') }}" alt="Third slide">
                        </div>
                    </div>
                      <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>

                </div>
                <p class="col">{{$dados->descricao1}}</p>
            </div>
            <div class="row d-flex m-3">
                <ul class="col">
                    <li>Área de Lazer </li>
                    <li>Piscina</li>
                    <li>Quadras</li>
                    <li>Cantina</li>
                </ul>
                <p class="col" style="flex-grow: 4">{{$dados->descricao2}}</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/localizacao.png') }}" class="mx-2">
                        <span>VARGINHA-MG</span>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/telefone.svg') }}" alt="" class="mx-2">
                        <span>{{$dados->telefone}}</span>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/email.svg') }}" alt="" class="mx-2">
                        <span>{{$dados->email}}</span>

                    </div>
                    <div id="piechart" class="w-100"></div>

                </div>

                <div class="col">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14842.753095007502!2d-45.4409707!3d-21.559041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca928564db2855%3A0x4c3c85cac0489007!2sCol%C3%A9gio%20Marista%20Varginha%20BabyG2c!5e0!3m2!1spt-BR!2sbr!4v1729618479993!5m2!1spt-BR!2sbr"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class=" card-avaliacao row ">
                <div class="col m-3">
                    <h2>NOME DO PAI</h2>
                    <span>4/7/2023</span>
                </div>
                <div class="col d-flex  flex-column justify-content-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quo eligendi quia consequatur, quae
                        iusto
                        molestiae tempore soluta vel veritatis fugit omnis necessitatibus asperiores provident unde
                        voluptatem,
                        magnam accusamus! Possimus? <a href="">Ver mais</a></p>
                    <div id="  undo-estrelas-amarelas" class="d-flex flex-row justify-content-around w-50 estrelas-perfil">
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
            <div class="d-flex justify-content-end">
                <button type="button" class=" align-self btn btn-info">Avaliar <span class="star-icon full">☆</span></button>
            </div>
        </div>
        
        <div>
            <nav aria-label="Page navigation example " class="d-flex justify-content-center">
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
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Doutorado', 1],
  ['Graduação', 5],
  ['Pós-Graduação', 4],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'height':400, 'backgroundColor':'#F6F7F8' };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
@endsection
