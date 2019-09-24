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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div class="container">
    <div class="row justify-content-center">
   
       
        <form method="POST" action="dias" >
            
            <select name="dias" style="height:8%; width:30%; font-size:20px; " onchange="myFunction()">
                
                <optgroup label="Dias">
                    
                    <option value="1">1 dia</option>
                    <option value="2">2 dias</option>
                    <option value="3">3 dias</option>
                    <option value="4">4 dias</option>
                    <option value="5">5 dias</option>
                    <option value="6">6 dias</option>
                    <option value="7">7 dias</option>
                    
                </optgroup>
                
            </select> 

            @csrf
            
            <input  style="height:8%; width:30%;" type="submit" name="enviar" value="Enviar">

        </form>        
              
        @for ($i = 1; $i < $dias_rutina+1; $i++)
            
            <ul>
            
                <a>Dia {{$i}}  </a><a class="edit_musculo" href="http://localhost/My_Apps/fit/public/add_{{$i}}">+</a>
            
            </ul>
            @foreach ( $musculos as $mu )
                
                @if($i == 1 && $mu->d1 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif

                @if($i == 2 && $mu->d2 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif

                @if($i == 3 && $mu->d3 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif

                @if($i == 4 && $mu->d4 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif

                @if($i == 5 && $mu->d5 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif
            
                @if($i == 6 && $mu->d6 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif

                @if($i == 7 && $mu->d7 == 1)
                    
                    <ul style="background-color:#006400">

                        <a>{{$mu->nombre}}</a>

                    </ul>
            
                @endif
            
            
            
            
            
            @endforeach
            
            <br>

        @endfor

    </div>
</div>

<br>
<br>
<br>


@endsection
