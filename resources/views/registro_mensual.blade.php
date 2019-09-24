@extends('Fit.plantilla')

@section('contenido')

    @foreach ( $registros as $re)
        <ul class="musculo_ul">
        
            <a class="musculo" href="">{{$re->dia}} {{$re->created_at}}</a>
        
        </ul>
    @endforeach

@endsection