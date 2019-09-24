@extends('Fit.plantilla')

@section('contenido')

<div class="dia"><h1 class="titulo_entreno">MI RUTINA</h1></div>

<br><br><br><br><br><br><br><br><br>

<ul style="background-color:#ffff66; float:left;" class="tipo_rutina_pordias">
    <a href="http://localhost/My_Apps/fit/public/ejercicio">EJEJRCICIO</a>
</ul>
@if ( $mi_rutina->tipo == 0 )
<ul style="background-color:#06f998; float:right;" class="tipo_rutina_pordias">
    <a href="http://localhost/My_Apps/fit/public/mi_rutina/1">POR DIAS</a>
</ul>
@endif
@if ( $mi_rutina->tipo == 1 )
<ul style="background-color:#06f998; float:right;" class="tipo_rutina_semanal">
    <a href="http://localhost/My_Apps/fit/public/mi_rutina/0">SEMANAL</a>
</ul>
@endif

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        

        
        <ul>
            <a>LUNES</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_LUNES">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->lunes == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

        <br>
        <br>
        <br>

        <ul>
            <a>MARTES</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_MARTES">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->martes == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

        <br>
        <br>
        <br>

        <ul>
            <a>MIERCOLES</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_MIERCOLES">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->miercoles == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

        <br>
        <br>
        <br>

        <ul>
            <a>JUEVES</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_JUEVES">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->jueves == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

        <br>
        <br>
        <br>

        <ul>
            <a>VIERNES</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_VIERNES">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->viernes == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach
              
        <br>
        <br>
        <br>

        <ul>
            <a>SABADO</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_SABADO">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->sabado == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

        <br>
        <br>
        <br>

        <ul>
            <a>DOMINGO</a><a class="edit_musculo"href="http://localhost/My_Apps/fit/public/add_DOMINGO">+</a>
        </ul>
        
        @foreach ($musculos as $mu) 
        @if ( $mu->domingo == 1)
        <ul style=" background-color:#006400;">
            <a href="http://localhost/My_Apps/fit/public/musculo_{{$mu->nombre}}">{{$mu->nombre}}</a>
        </ul>
        @endif
        @endforeach

    </div>
</div>

<br>
<br>
<br>


@endsection
