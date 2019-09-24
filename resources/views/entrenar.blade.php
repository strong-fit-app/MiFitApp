@extends('Fit.plantilla')

@section('contenido')

  
<div class="dia"><h1 class="titulo_entreno">ENTRENO</h1></div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<div class="container">
    <div class="row justify-content-center">        
        
        <ul>
            <a href="guardar_entreno_{{$dia_entreno}}">GUARDAR ENTRENO</a>
        </ul>

        <div class="musculos">
          
            @foreach ( $musculos as $mu)
            <ul class="musculo_ul">
                <a class="musculo" href="http://localhost/My_Apps/fit/public/musculo/">{{$mu->nombre}}</a>
            </ul>
           
            
           
            @foreach ( $ejercicios as $ej)

            @if ($ej->musculo_id == $mu->musculo_id)
            <div class="ej_cuadros">
            
            <ul class="ejercicio_ul">
                <a class="musculo" href="">{{$ej->nombre}}</a>
            </ul>
            <ul class="tipo_ej">
                <a id="peso" alt="{{$ej->id}}">{{$ej->peso}}</a>
            </ul>
            <ul class="tipo_ej">
                <a id="sert" alt="{{$ej->id}}">{{$ej->s_totales}}</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="">{{$ej->s_hechas}}</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="http://localhost/My_Apps/fit/public/quit_s/{{$ej->id}}">-</a>
            </ul>
            <ul class="tipo_ej">
                <a class="" href="http://localhost/My_Apps/fit/public/add_s/{{$ej->id}}">+</a>
            </ul>

            <br><br>
            </div>  
            @endif
            @endforeach   
            @endforeach
        </div>
        
    </div>
</div>

<br>
<br>
<br>



<script>

    $(document).ready(function(){

    
    window.scrollTo(0,document.body.scrollHeight);


    $("a").click(function(){

        var id_ejercicio = $(this).attr("alt");
        var id = this.id;
        tipo = id.slice(0, 5);
        
        //alert(tipo);

        if ( tipo == "elimi" ) {
                
                var resposta = confirm("Perderás el progreso del ejercicio!");
            
                if ( resposta == true ) {
                    
                    window.location.href = "del_ejercicio"+id_ejercicio;
                }
            } else if ( tipo == "peso" ) {

                    var peso = prompt("Cambiar peso");

                    if ( peso > 0 && peso < 200 ) {

                        window.location.href = "editar_peso/"+id_ejercicio+"/"+peso;

                    } 

            } else if ( id == "sert" ) {
                
                var series = prompt("Cambiar series");

                if ( series > 0 && series < 20 ) {

                    window.location.href = "editar_series/"+id_ejercicio+"/"+series;

                } 
            }
        
        });
    });
        
 
</script>

@endsection

