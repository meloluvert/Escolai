<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESCOLAÍ</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('navbar')
    @endcomponent
    <div class="container mt-5">
        <main role="main" class="m-8 py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>
        <div class="card-footer" style="background-color: #314D5D;">
            <p class="text-center py-4" style="color:#fff;">©Copyright 2024-Escolaí</p>
            <div>
                <ul>
                    <li>Como escolher boas escolas</li>
                    <li>Quais documentos normalmente escolas pedem?</li>
                </ul>
            </div>
        </div>
</body>
</html>
