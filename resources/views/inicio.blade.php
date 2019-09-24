@extends('Fit.plantilla')

@section('contenido')

<div class="dia"><h1 class="titulo_entreno">Hoy es {{$dia}}, {{$dia_mes}} de {{$nom_mes}}</h1></div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        
        <ul>
            <a href="http://localhost/My_Apps/fit/public/entrenar">ENTRENAR</a>
        </ul>

        <br>
        
        <ul style="background-color:#00FFFF;">
            <a href="http://localhost/My_Apps/fit/public/mi_rutina">MI RUTINA</a>
        </ul>

        <br>
        
        <ul style="background-color:#FF8C00;">
            <a href="http://localhost/My_Apps/fit/public/mis_entrenos">REGISTRO MENSUAL</a>
        </ul>
        
        <br>

        @foreach ( $notificaciones as $no )
            
            <ul style="background-color:#F0FFF0;">
            
                <a>{{$no->mensaje}}</a>
            
            </ul>
        
        @endforeach
        
        <br>

    </div>
</div>

<br>
<br>
<br>


@endsection

