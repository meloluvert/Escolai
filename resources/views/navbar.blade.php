<nav class="navbar navbar-expand-md navbar-collapse navbar-dark w-100 fixed-top d-flex justify-content-between "
    style='background-color:#314D5D'>
    <div class="d-flex flex-justify-content-center align-items-center">
        <img src="{{ asset('storage/imgs/logo.png') }}" alt="logo" id="logo">
        <p id="titulo"class="navbar-brand m-0">ESCOLAÍ</p>
    </div>
    <div class="pr-2" id="navbarsExampleDefault ">
        <ul class="navbar-nav mr-auto ">
            <a class="nav-item nav-link" href="/">Início</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/login2" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Conta
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/login">Entrar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/informacoes">Ver Perfil da Escola</a>
                    <a class="dropdown-item" href="/editarPerfil">Editar Perfil da Escola</a>
                    @if (auth()->guard('escola')->check())
                    <a class="dropdown-item" href="/escola/editar/{{Auth::guard('escola')->user()->id}}">Editar Informações Escola</a>
                    <a href="dropdown-item" href="/escola/apagar/{{Auth::guard('escola')->user()->id}}">Apagar Conta</a>
                    @endif
                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/editarResponsavel">Editar Informações Responsável</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/cadastroAnuncio">Cadastrar Anúcios</a>
                </div>
            </li>
            <a class="nav-item nav-link" href="/">Escolas</a>
            <a class="nav-item nav-link" href="/">Sobre</a>

        </ul>
    </div>
</nav>
