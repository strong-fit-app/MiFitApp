@extends('Fit.plantilla')

@section('contenido')

  
<div class="dia"><h1 class="titulo_entreno">ENTRENO</h1></div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">        
        
        <div class="musculos">
            @foreach ( $musculos as $mu)
            <ul class="musculo_ul">
                <a class="musculo" href="http://192.168.1.108/My_Apps/fit/public/musculo/">{{$mu->nombre}}</a>
            </ul>
           
            
           
           
            <div class="ej_cuadros">
            <ul class="ejercicio_ul">
                <a class="musculo" href="">EJERCICIO1</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="">1</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="">2</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="">3</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="http://192.168.1.108/My_Apps/fit/public/quit_s/id/">-</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="http://192.168.1.108/My_Apps/fit/public/add_s/id">+</a>
            </ul>

            <br><br>
            </div>     
            @endforeach
        </div>
        
    </div>
</div>

<br>
<br>
<br>


@endsection

