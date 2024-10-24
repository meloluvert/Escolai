@extends('layout')
@section('content')
    <div class="container">
        <div>

            <div class="d-flex flex-row w-100 justify-content-between header-perfil">
                <div class="d-flex align-items-center">
                    <h1 class="titulo-perfil">MARISTA</h1>
                </div>
                <div>
                    <div class=" d-flex justify-content-around flex-grow-2 align-items-">
                        <img src="{{ asset('storage/imgs/whatsapp.png') }}" class="footer-icon" style="display: inline-block;"
                            alt="">
                        <img src="{{ asset('storage/imgs/instagram.png') }}" class="footer-icon"
                            style="display: inline-block;">
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
                <img class="col" src="{{ asset('storage/imgs/fotoMaristaTeste.png') }}" alt="">
                <p class="col">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus mauris a faucibus
                    consequat.
                    Vestibulum ante
                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut nisl nibh, condimentum eget
                    finibus
                    quis,
                    finibus at urna. Nullam finibus lacus sed dolor luctus, consequat suscipit leo convallis. Curabitur non
                    turpis
                    ut
                    sapien scelerisque ultrices. Nulla eget ipsum augue. Cras iaculis tellus velit, id maximus felis posuere
                    at.
                    Mauris
                    vitae purus et tellus tristique porta. Morbi feugiat lectus lobortis, luctus dui sit amet, volutpat
                    turpis.
                    Nulla a
                    ligula sodales, lobortis arcu quis, feugiat risus. Nunc interdum, quam vel convallis interdum, dui nunc
                    varius
                    erat,
                    id varius tellus lacus ut dui. Morbi nec vestibulum lectus, at convallis ex.</p>
            </div>
            <div class="row d-flex m-3">
                <ul class="col">
                    <li>Área de Lazer </li>
                    <li>Piscina</li>
                    <li>Quadras</li>
                    <li>Cantina</li>
                </ul>
                <p class="col" style="flex-grow: 4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cursus
                    mauris a
                    faucibus conse purus et tellus
                    tristique porta. Morbi feugiat lectus lobortis, luctus dui sit amet, volutpat turpis. Nulla a ligula
                    sodales,
                    lobortis arcu quis, feugiat risus. Nunc interdum, quam vel convallis interdum, dui nunc varius erat, id
                    varius
                    tellus lacus ut dui. Morbi nec vestibulum lectus, at convallis ex.</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/localizacao.png') }}" class="mx-2">
                        <span>VARGINHA-MG</span>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/telefone.svg') }}" alt="" class="mx-2">
                        <span>35 95568-1234</span>

                    </div>
                    <div class="d-flex">
                        <img src="{{ asset('storage/imgs/email.svg') }}" alt="" class="mx-2">
                        <span>maristavga@dominio.com</span>

                    </div>
                    <div class="row">
                        <span>Escolaridade dos Professores </span>
                        <img src="{{ asset('storage/imgs/graficoTeste.png') }}" alt="">
                    </div>

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
@endsection
