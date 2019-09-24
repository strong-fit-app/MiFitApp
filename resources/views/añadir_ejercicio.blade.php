@extends('Fit.plantilla')

@section('contenido')

<div class="card-header">
                
    Añadir ejercicio

</div>


<div class="container">
    <div class="row justify-content-center">
        
        <form method="POST" action="store" >
            
            <input style="height:8%; width:30%; font-size:50px;" type="text" name="NombreEjercicio">
        
            <!--<input type="text" name="musculo" id="musc">-->
            
            <select name="musculo" style="height:8%; width:30%; font-size:20px; " onchange="myFunction()">
                
                <optgroup label="Mis musculos">
                
                    @foreach ( $musculos as $musculo ) 
                        
                        <option value="{{ $musculo->nombre }}">{{ $musculo->nombre }}</option>
                    
                    @endforeach
                
                </optgroup>
                
            </select> 

            @csrf
            
            <input  style="height:8%; width:30%;" type="submit" name="enviar" value="Enviar">

        </form>

<ul>
    
        <a href="h">ESPALDA</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 1)
    
    <ul style=" background-color:white;">
    
        <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>

    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 1)
    
    <ul style=" background-color:grey;">
    
        <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

    </ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">PECHO</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 2)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 2)
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">HOMBRO</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 3)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 3)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">PIERNA</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 4)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 4)
    
    <ul style=" background-color:grey;">
    
        <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

    </ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">TRICEPS</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 5)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 5)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">BICEPS</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 6)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 6)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">GEMELO</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 7)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>

    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 7)
    <ul style=" background-color:grey;">
    
        <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

    </ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">ABDOMINALES</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 8)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>

    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 8)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">TRAPECIO</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 9)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>

    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 9)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    
    @endif
    
@endforeach

<br>

<ul>
    
        <a href="h">LUMBAR</a>

</ul>

@foreach ($ejercicios as $ej) 

    @if ( $ej->musculo_id == 10)
    
    <ul style=" background-color:white;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/desactivar_{{$ej->id}}">-</a>


    </ul>
    
    @endif
    
@endforeach

@foreach ($ejercicios_inactivos as $ej) 

    @if ( $ej->musculo_id == 10)
    
    <ul style=" background-color:grey;">
    
    <a href="h">{{$ej->nombre}}</a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/activar_{{$ej->id}}">+</a>

</ul>
    
    @endif
    
@endforeach

</div>
</div>
@endsection