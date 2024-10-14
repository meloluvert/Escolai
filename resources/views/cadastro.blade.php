@extends('layout')

@section('content')
    <div>
        <h3 style="display:flex; align-items: center; justify-content: center;">CADASTRAR-SE</h3>
    </div>
    <div class="tab" style="display:flex; gap: 20%; align-items: center; justify-content: center;">
        <div>
            <h4 class="tablinks" onclick="show(event, 'responsavel')">RESPONSÁVEL</h4>
        </div>
        <div>
            <h4 class="tablinks" onclick="show(event, 'escola')">ESCOLA</h4>
        </div>
    </div>
    <div class="tabcontent" id="escola">
        <div style="display:flex; align-items: center; justify-content: center;">
            @include('Escola.cadastro')
        </div>
    </div>
    <div class="tabcontent" id="responsavel">
        <div style="display:flex; align-items: center; justify-content: center;">
            @include('Responsavel.cadastro           ')
        </div>
    </div>
    <script>
        function show(evt, typeName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(typeName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endsection
