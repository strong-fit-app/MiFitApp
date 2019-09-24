@extends('Fit.plantilla')

@section('contenido')

<div class="dia"><h1 class="titulo_entreno">MI RUTINA</h1></div>

<br><br><br><br><br><br><br><br><br>

<ul style="background-color:#99ff99;" class="tipo_rutina_pordias">
    <a href="mi_rutina">GUARDAR</a>
</ul>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        

        
        <ul>
            @if ($dia > 0 && $dia < 8 ) 
            
                <a>Dia {{$dia}}</a>
            
            @else
            
                <a>{{$dia}}</a>
            
            @endif
        
        </ul>

<br><br><br>

<div class="container">
    <div class="row justify-content-center">
        
        @foreach ($musculos as $mu) 
        
        <ul style=" background-color:white;">
            <a href="">{{$mu->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/del_{{$dia}}/del{{$mu->musculo_id}}">-</a>
        </ul>
      
        @endforeach

        <br>
        <br>
        <br>

        @foreach ($musculos_no as $mu) 
        
        <ul>
            <a href="">{{$mu->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_{{$dia}}/add{{$mu->musculo_id}}">+</a>
        </ul>
      
        @endforeach

        <br>
        <br>
        <br>

        @if ($dia > 0 && $dia < 8 ) 

            <ul>
                <a href="">Descanso</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_{{$dia}}/add0">+</a>
            
            </ul>
        
        @endif


    </div>
</div>

<br>
<br>
<br>


@endsection
