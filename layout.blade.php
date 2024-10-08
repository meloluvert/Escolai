<!DOCTYPE html>
    <html lang ="pt-br ">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESCOLAÍ</title>
    @vite(['resources/js/app.js'])
    <body >
    @component('navbar')
    @endcomponent
        <div class ="container">
            <main role ="main" class ="py-4">
                @hasSection (`content`)
                    @yield (`content`)
                @endif
            </main>
        </div >
        <div class ="container">
            <div class ="card-footer " style='background-color: #314D5D;'>
                <p class ="text-center py-4" style='color:#fff;'>©Copyright 2024-Escolaí</p>
            </div >
        </div >
    </body >
</html >
