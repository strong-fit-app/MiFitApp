<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\EjerciciosUsuario;
use App\MusculosUsuario;

use App\MusculosSemana;
use App\MusculosDia;

use App\EjerciciosRegistro;
use App\MusculosRegistro;

use App\TipoRutina;

use App\Notificacione;

use App\UltimosEntreno;

use DB;

class FitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function seed(){

        $user = Auth::user()->id;

        // TIPO RUTINA
        $Tipo_Rutina = new TipoRutina;
        $Tipo_Rutina->user_id = $user;
        $Tipo_Rutina->tipo = 0;
        $Tipo_Rutina->dias = 1;
        $Tipo_Rutina->save();

        $musculo_s = MusculosSemana::where('user_id',$user)->where('musculo_id',1)->first();
        $musculo_d = MusculosDia::where('user_id',$user)->where('musculo_id',1)->first();

        if ( $musculo_s == null ) {
        
            // MUSCULOS USUARIO - RUTINA DIAS
            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 1;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 2;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 3;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 4;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 5;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 6;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 7;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 8;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 9;
            $Musculos_Dias->save();  

            $Musculos_Dias = new MusculosDia;
            $Musculos_Dias->user_id = $user;
            $Musculos_Dias->musculo_id = 10;
            $Musculos_Dias->save();  

        }

        if ( $musculo_s == null ) {

            // MUSCULOS USUARIO - RUTINA SEMANAL
            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 1;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 2;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 3;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 4;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 5;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 6;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 7;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 8;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 9;
            $Musculos_Semanas->save();

            $Musculos_Semanas = new MusculosSemana;
            $Musculos_Semanas->user_id = $user;
            $Musculos_Semanas->musculo_id = 10;
            $Musculos_Semanas->save();
        }

        $musculo_u = MusculosUsuario::where('user_id',$user)->where('musculo_id',1)->first();
        if ( $musculo_u == null ) {
            // MUSCULOS USUARIO
            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 1 ;
            $Musculos_Usuario->nombre = "ESPALDA";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 2;
            $Musculos_Usuario->nombre = "PECHO";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 3;
            $Musculos_Usuario->nombre = "HOMBRO";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 4;
            $Musculos_Usuario->nombre = "PIERNA";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 5;
            $Musculos_Usuario->nombre = "TRICEPS";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 6;
            $Musculos_Usuario->nombre = "BICEPS";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 7;
            $Musculos_Usuario->nombre = "GEMELO";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 8;
            $Musculos_Usuario->nombre = "ABDOMINALES";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 9;
            $Musculos_Usuario->nombre = "TRAPECIO";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();

            $Musculos_Usuario = new MusculosUsuario;
            $Musculos_Usuario->user_id = $user;
            $Musculos_Usuario->musculo_id = 10;
            $Musculos_Usuario->nombre = "LUMBAR";
            //$Musculos_Usuario->tipo_rutina = 0;
            $Musculos_Usuario->save();
            
        }

        return redirect('/');
    }

    public function home(){
        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;

        // DIA DE LA SEMANA
        $datetime = date('Y-m-d');

        $num_dia = date('w', strtotime($datetime));

        $dia_mes = date('j', strtotime($datetime));     
        
        $num_mes = date('n', strtotime($datetime));

        $array = array("","Enero",
                        "Febrero",
                        "Marzo",
                        "Abril",
                        "Mayo",
                        "Junio",
                        "Julio",
                        "Agosto",
                        "Septiembre",
                        "Octubre",
                        "Noviembre",
                        "Diciembre");
        
        $nom_mes = $array[$num_mes];

        if ( $num_dia == 1 ) {

            $dia = 'Lunes';
    
        } else if ( $num_dia == 2 ) {

            $dia = 'Martes';
    
        } else if ( $num_dia == 3 ) {

            $dia = 'Miercoles';
     
        } else if ( $num_dia == 4 ) {

            $dia = 'Jueves';
    
        } else if ( $num_dia == 5 ) {

            $dia = 'Viernes';
      
        } else if ( $num_dia ==6 ) {

            $dia = 'Sabado';
     
        } else if ( $num_dia == 0 ) {

            $dia = 'Domingo';
        } 

        $notificaciones = Notificacione::where('user_id',$user)->get();

        return view('inicio', compact('dia' , 'dia_mes', 'nom_mes','notificaciones'));
    }

    
    // ENTRENAR
    public function entrenar(){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;  
        
        // DIA DE LA SEMANA
        $datetime = date('Y-m-d');
        
        $num_dia = date('w', strtotime($datetime));

        if ( $num_dia == 1 ) {

            $dia = 'Lunes';
    
        } else if ( $num_dia == 2 ) {

            $dia = 'Martes';
    
        } else if ( $num_dia == 3 ) {

            $dia = 'Miercoles';
     
        } else if ( $num_dia == 4 ) {

            $dia = 'Jueves';
    
        } else if ( $num_dia == 5 ) {

            $dia = 'Viernes';
      
        } else if ( $num_dia ==6 ) {

            $dia = 'Sabado';
     
        } else if ( $num_dia == 0 ) {

            $dia = 'Domingo';
        } 
    
        $num_mes = date('n', strtotime($datetime));

        $array = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        
        $nom_mes = $array[$num_mes];
        
        $ejercicios = EjerciciosUsuario::all();
       
        $tipo_rutina = TipoRutina::where('user_id', $user)->first();
        
        
        if ( $tipo_rutina->tipo == 0 ) {

           

            if ( $num_dia == 1 ) {

                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('lunes',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();

                    $dia_entreno = "lunes";
        
            } else if ( $num_dia == 2 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('martes',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();

                    $dia_entreno = "martes";
        
            } else if ( $num_dia == 3 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('miercoles',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();
                    $dia_entreno = "miercoles";

            } else if ( $num_dia == 4 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('jueves',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();
                    $dia_entreno = "jueves";

            } else if ( $num_dia == 5 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('viernes',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();
                    $dia_entreno = "viernes";
            } else if ( $num_dia ==6 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('sabado',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();
                    $dia_entreno = "sabado";
            } else if ( $num_dia == 0 ) {
    
                $musculos = DB::table('musculos_semanas')->where('musculos_semanas.user_id', $user)->where('domingo',1)
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select(
                    'musculos_semanas.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->get();
                    $dia_entreno = "domingo";
                } 
            

            
        
        } else if ( $tipo_rutina->tipo == 1 ) {

            $ultimo_entreno = UltimosEntreno::where('user_id',$user)->where('tipo_rutina',1)->orderby('created_at', 'DESC')->first();
            
            $entreno_hoy = MusculosDia::where('user_id',$user)->get();
            
            $tipo_rutina = TipoRutina::where('user_id',$user)->first();
                        
            
            // DIAS DE ENTRENO DE LA RUTINA
            if ( $tipo_rutina->dias == 1 ) {
                
                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {

                    $musculos = DB::table('musculos_dias')->where('d1',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    
                    $dia_entreno = "d1";
                }

            } else if ( $tipo_rutina->dias == 2 ) { 

                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {

                    $musculos = DB::table('musculos_dias')->where('d2',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    
                    $dia_entreno = "d2";

                } else if ( $ultimo_entreno->dia == 2 ) {

                    $musculos = DB::table('musculos_dias')->where('d3',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();

                    $dia_entreno = "d3";
                }

            } else if ( $tipo_rutina->dias == 3 ) { 

                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {

                    $musculos = DB::table('musculos_dias')->where('d2',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d2";

                } else if ( $ultimo_entreno->dia == 2 ) {

                    $musculos = DB::table('musculos_dias')->where('d3',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d3";

                } else if ( $ultimo_entreno->dia == 3 ) {

                    $musculos = DB::table('musculos_dias')->where('d1',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d1";
                
                }

            } else if ( $tipo_rutina->dias == 4 ) { 

                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {

                    $musculos = DB::table('musculos_dias')->where('d2',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d2";

                } else if ( $ultimo_entreno->dia == 2 ) {

                    $musculos = DB::table('musculos_dias')->where('d3',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d3";
                } else if ( $ultimo_entreno->dia == 3 ) {

                    $musculos = DB::table('musculos_dias')->where('d4',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d4";
                } else if ( $ultimo_entreno->dia == 4 ) {

                    $musculos = DB::table('musculos_dias')->where('d1',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d1";
                }

            } else if ( $tipo_rutina->dias == 5 ) { 

                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {

                    $musculos = DB::table('musculos_dias')->where('d2',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d2";
                } else if ( $ultimo_entreno->dia == 2 ) {

                    $musculos = DB::table('musculos_dias')->where('d3',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d3";
                } else if ( $ultimo_entreno->dia == 3 ) {

                    $musculos = DB::table('musculos_dias')->where('d4',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d4";
                } else if ( $ultimo_entreno->dia == 4 ) {

                    $musculos = DB::table('musculos_dias')->where('d5',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d5";
                } else if ( $ultimo_entreno->dia == 5 ) {

                    $musculos = DB::table('musculos_dias')->where('d1',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d1";
                }

            } else if ( $tipo_rutina->dias == 6 ) { 

                // ULTIM ENTRENO ENTRENAT
                if ( $ultimo_entreno->dia == 1 ) {
                   
                    $musculos = DB::table('musculos_dias')->where('d2',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d2";
                   

                } else if ( $ultimo_entreno->dia == 2 ) {
                    
                    $musculos = DB::table('musculos_dias')->where('d3',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d3";
                } else if ( $ultimo_entreno->dia == 3 ) {

                    $musculos = DB::table('musculos_dias')->where('d4',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d4";
                } else if ( $ultimo_entreno->dia == 4 ) {

                    $musculos = DB::table('musculos_dias')->where('d5',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d5";
                } else if ( $ultimo_entreno->dia == 5 ) {

                    $musculos = DB::table('musculos_dias')->where('d6',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d6";
                } else if ( $ultimo_entreno->dia == 6 ) {

                    $musculos = DB::table('musculos_dias')->where('d1',1)
                    ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                    ->select(
                    'musculos_dias.musculo_id',
                    'musculos_usuarios.nombre',
                    'musculos_usuarios.user_id'
                    )->orderby('musculos_dias.updated_at','asc')->get();
                    $dia_entreno = "d1";
                }
            }             
        }      

       return view('entrenar',compact('musculos','ejercicios','dia_entreno'));

    }

    public function guardar_entreno($dia_entreno){  
        
        $user = Auth::user()->id;  
        
        $guardar = new UltimosEntreno;
        $guardar->user_id = $user;
        
        
        if (    $dia_entreno == "lunes" || 
                $dia_entreno == "martes" || 
                $dia_entreno == "miercoles" || 
                $dia_entreno == "jueves" || 
                $dia_entreno == "viernes" || 
                $dia_entreno == "sabado" || 
                $dia_entreno == "domingo" ) {

            $guardar->tipo_rutina = 0;
            
            if ( $dia_entreno == "lunes" ) {
                
                $guardar->dia = 1; 
            
            } else  if ( $dia_entreno == "martes" ) {
                
                $guardar->dia = 2; 
            
            } else  if ( $dia_entreno == "miercoles" ) {
                
                $guardar->dia = 3; 
            
            } else  if ( $dia_entreno == "jueves" ) {
                
                $guardar->dia = 4; 
            
            } else  if ( $dia_entreno == "viernes" ) {
                
                $guardar->dia = 5; 
            
            } else  if ( $dia_entreno == "sabado" ) {
                
                $guardar->dia = 6; 
            
            } else  if ( $dia_entreno == "domingo" ) {
                
                $guardar->dia = 7; 
            
            }
        } else {

            $dia = substr($dia_entreno, 1,2 );

            $guardar->dia = $dia; 
            
            $guardar->tipo_rutina = 1;
        }

        $guardar->save();

        return redirect('entrenar');
    } 

    // SUBIR SERIE
    public function add_serie($id){

        if (Auth::guest()){
            return redirect('/login');
        }
        
        $user = Auth::user()->id;  
        
        // DIA DE LA SEMANA
        $datetime = date('Y-m-d');
        
        $num_dia = date('w', strtotime($datetime));
   
        $num_mes = date('n', strtotime($datetime));

        $ej = EjerciciosUsuario::where('id',$id)->where('user_id',$user)->first();
        
        $fecha = substr($ej->created_at, 0, 10);

        $dia_ayer = date('j', strtotime($datetime))-1;

        $fecha_ayer = date('Y-m-'.$dia_ayer);
        
        $fecha_hoy = date('Y-m-d H:i:s');
        
        if ( $ej->s_hechas < 9 ) {
            
            $ej->s_hechas = $ej->s_hechas+1;
            $ej->save();

            $existe_hoy = EjerciciosRegistro::where('ejercicio_id',$ej->id)->where('updated_at','>=',$datetime)->get();
            
            foreach ( $existe_hoy as $hoy ) {
                   
                if ( $hoy->ejercicio_id == $id){
                    $hoy->delete();
                }
            }
            
            $registro_ejercicio = new EjerciciosRegistro;
            $registro_ejercicio->user_id = $user;
            $registro_ejercicio->musculo_id = $ej->musculo_id;
            $registro_ejercicio->ejercicio_id = $ej->id;
            $registro_ejercicio->nombre = $ej->nombre;
            $registro_ejercicio->peso = $ej->peso;
            $registro_ejercicio->series = $ej->s_hechas;
            $registro_ejercicio->save(); 

            $registros_musculos = MusculosRegistro::where('musculo_id',$id)->where('user_id',$user)->where('updated_at','>',$datetime)->get();
        
            foreach ( $registros_musculos as $registros_musculo ) {
                $registros_musculo->delete();
            }

            $musculo = MusculosUsuario::where('musculo_id',$ej->musculo_id)->where('user_id',$user)->first();
            
            $musculo_dia = MusculosDia::where('musculo_id',$ej->musculo_id)->where('user_id',$user)->first();
            $musculo_dia->updated_at = $fecha_hoy;
            $musculo_dia->save();

            $series_musculo = EjerciciosUsuario::where('musculo_id',$id)->where('user_id',$user)->where('activo',1)->sum('s_hechas');
            
            $registro_musculo = new MusculosRegistro;
            $registro_musculo->user_id = $user;
            $registro_musculo->musculo_id = $ej->musculo_id; 
            $registro_musculo->nombre = $musculo->nombre;
            $registro_musculo->series = $series_musculo;
            $registro_musculo->dia = 0;
            $registro_musculo->save();
        
        }

        return redirect('entrenar');
    }

    // BAJAR SERIE
    public function quit_serie($id){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;  
        
        $ej = EjerciciosUsuario::where('id',$id)->where('user_id',$user)->first();
        
        if ( $ej->s_hechas > 0 ) {
        
            $ej->s_hechas = $ej->s_hechas-1;
            $ej->save();
        
        }

        return redirect('entrenar');
    }

    // EDITAR PESO
    public function editar_peso($id,$peso){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;  

        if ( $peso >= 0 && $peso < 250 ) {
        
            $ej = EjerciciosUsuario::where('id',$id)->where('user_id',$user)->first();
            $ej->peso = $peso;
            $ej->save();
        }
        
        return redirect('entrenar');
    }

    // EDITAR SERIES
    public function editar_series($id,$series){

        if (Auth::guest()){
            return redirect('/login');
        }
   
        $user = Auth::user()->id;  

        if ( $series > 0 && $series < 9 ) {
        
            $ej = EjerciciosUsuario::where('id',$id)->where('user_id',$user)->first();
            $ej->s_totales = $series;
            $ej->save();
        }
        
        return redirect('entrenar');
    }

    // MUSCULOS
    public function musculo($id){

        if (Auth::guest()){
            return redirect('/login');
        }

        return "Mostrar musculo y sus ejercicios";
    }

    
    // CABMIAR MI RUTINA
    public function mi_rutina(){

        if (Auth::guest()){
            return redirect('/login');
        }

        // DIA DE LA SEMANA
        $datetime = date('Y-m-d');
                
        $num_dia = date('w', strtotime($datetime));

        $num_mes = date('n', strtotime($datetime));

        $array = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        
        $nom_mes = $array[$num_mes];
        
        $user = Auth::user()->id;
        
        $mi_rutina = TipoRutina::where('user_id',$user)->first();

        $dias_rutina = $mi_rutina->dias;
        
        if ( $mi_rutina->tipo == 1 ) {
                    
            $musculos = DB::table('musculos_dias')->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
            ->select(
            'musculos_dias.musculo_id',
            'musculos_dias.d1',
            'musculos_dias.d2',
            'musculos_dias.d3',
            'musculos_dias.d4',
            'musculos_dias.d5',
            'musculos_dias.d6',
            'musculos_dias.d7',
            'musculos_usuarios.nombre',
            'musculos_usuarios.user_id'
            )->where('musculos_dias.user_id', $user)->get();
            
           
            return view('rutina_pordias', compact('musculos','mi_rutina','dias_rutina'));
        
        } else if ( $mi_rutina->tipo == 0 ) {
            
            $musculos = MusculosSemana::where('user_id', $user)->get();

            $musculos = DB::table('musculos_semanas')->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
            ->select(
                'musculos_semanas.musculo_id',
                'musculos_semanas.lunes',
                'musculos_semanas.martes',
                'musculos_semanas.miercoles',
                'musculos_semanas.jueves',
                'musculos_semanas.viernes',
                'musculos_semanas.sabado',
                'musculos_semanas.domingo',
                'musculos_usuarios.nombre',
                'musculos_usuarios.user_id'
                )->get();
           
            return view('rutina_semanal', compact('musculos','mi_rutina'));
        }
    }

    // EDITAR MI RUTINA
    public function editar_rutina_semanal($dia){
    
        $user = Auth::user()->id;
        
        $tipo_rutina = TipoRutina::where('user_id',$user)->first();

        if ( $tipo_rutina->tipo == 0 ) {

            if ( $dia == "LUNES" ) {

                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.lunes',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.lunes','!=',1)->get();         
            
    
            } else if ( $dia == "MARTES" ) {      
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.martes',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.martes','!=',1)->get();         
            
                
            } else if ( $dia == "MIERCOLES" ) {
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.miercoles',1)->get();         
            
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.miercoles','!=',1)->get();         
            
    
            } else if ( $dia == "JUEVES" ) {
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.jueves',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.jueves','!=',1)->get();         
            
    
            } else if ( $dia == "VIERNES" ) {
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.viernes',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.viernes','!=',1)->get();         
            
    
            } else if ( $dia == "SABADO" ) {
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.sabado',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.sabado','!=',1)->get();         
            
    
            } else if ( $dia == "DOMINGO" ) {
    
                $musculos = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.domingo',1)->get();         
                
                $musculos_no = DB::table('musculos_semanas')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_semanas.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_semanas.domingo','!=',1)->get();         
            }
        
            

        } else if ( $tipo_rutina->tipo == 1 ) {

            if ( $dia == 1 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d1',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d1','!=',1)->get();         
            
            } else if ( $dia == 2 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d2',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d2','!=',1)->get();         
            

            } else if ( $dia == 3 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d3',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')->where('musculos_dias.d3','!=',1)->get();         
            

            } else if ( $dia == 4 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d4',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d4','!=',1)->get();         
            

            } else if ( $dia == 5 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d5',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')->where('musculos_dias.d5','!=',1)->get();         
            

            } else if ( $dia == 6 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d6',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')->where('musculos_dias.d6','!=',1)->get();         
            

            } else if ( $dia ==7 ) {

                $musculos = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d7',1)->get();         
                
                $musculos_no = DB::table('musculos_dias')
                ->join('musculos_usuarios','musculos_usuarios.musculo_id', '=', 'musculos_dias.musculo_id')
                ->select('musculos_usuarios.nombre', 'musculos_usuarios.musculo_id')
                ->where('musculos_dias.d7','!=',1)->get();         
            

            }
        }
        return view('dia',compact('dia','musculos','musculos_no'));
    }

    // AÑADIR MUSUCLO RUTINA SEMANAL
    public function add_musculo_rutina_semanal($dia,$musculo){
        $user = Auth::user()->id;

        $tipo_rutina = TipoRutina::where('user_id',$user)->first();     

        if ( $tipo_rutina->tipo == 0 ) {

            $musculo = MusculosSemana::where('user_id',$user)->where('musculo_id',$musculo)->first();
            
            if ( $dia == "LUNES" ) {
                
                $musculo->lunes = 1;
                $musculo->save();
               
            } else if ( $dia == "MARTES" ) {      

                $musculo->martes = 1;
                $musculo->save();
                        
            } else if ( $dia == "MIERCOLES" ) {
                
                $musculo->miercoles = 1;
                $musculo->save();

            } else if ( $dia == "JUEVES" ) {

                $musculo->jueves = 1;
                $musculo->save();

            } else if ( $dia == "VIERNES" ) {
    
                $musculo->viernes = 1;
                $musculo->save();
             
            } else if ( $dia == "SABADO" ) {

                $musculo->sabado = 1;
                $musculo->save();

            } else if ( $dia == "DOMINGO" ) {

                $musculo->domingo = 1;
                $musculo->save();
             
            }
        } else if ( $tipo_rutina->tipo == 1 ) {
            
            if ( $dia == 1 ) {

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d1 = 0;
                        $mu->save();
                    }
                   
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d1 = 1;
                    $musculo->save();

                }
                
            } else if ( $dia == 2 ) {

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d2 = 0;
                        $mu->save();
                    }
                       
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d2 = 1;
                    $musculo->save();

                }

            } else if ( $dia == 3 ) {

              

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d3 = 0;
                        $mu->save();
                    }
                   
                    
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d3 = 1;
                    $musculo->save();

                }

            } else if ( $dia == 4 ) {          

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d4 = 0;
                        $mu->save();
                    }
                    
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d4 = 1;
                    $musculo->save();

                }

            } else if ( $dia == 5 ) {

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d5 = 0;
                        $mu->save();
                    }
                           
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d5 = 1;
                    $musculo->save();

                }

            } else if ( $dia == 6 ) {       

                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d6 = 0;
                        $mu->save();
                    }         
                    
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d6 = 1;
                    $musculo->save();

                }

            } else if ( $dia ==7 ) {
               
                if ( $musculo == 0 ) {
            
                    $musculos = MusculosDia::where('user_id',$user)->get();
                   
                    foreach ( $musculos as $mu) {
        
                        $mu->d7 = 0;
                        $mu->save();
                    }
                                   
                } else {

                    $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();
                    $musculo->d7 = 1;
                    $musculo->save();

                }
            }
        }
        return redirect('add_'.$dia);
    }

    // QUITAR MUSUCLO RUTINA SEMANAL
    public function del_musculo_rutina_semanal($dia,$musculo){
        
        $user = Auth::user()->id;

        $tipo_rutina = TipoRutina::where('user_id',$user)->first();

        if ( $tipo_rutina->tipo == 0 ) {
            
            $musculo = MusculosSemana::where('user_id',$user)->where('musculo_id',$musculo)->first();

            if ( $dia == "LUNES" ) {
                
                $musculo->lunes = 0;
                $musculo->save();
                
            } else if ( $dia == "MARTES" ) {      

                $musculo->martes = 0;
                $musculo->save();
                
            } else if ( $dia == "MIERCOLES" ) {
                
                
                $musculo->miercoles = 0;
                $musculo->save();
            
            } else if ( $dia == "JUEVES" ) {

                $musculo->jueves = 0;
                $musculo->save();
              
            } else if ( $dia == "VIERNES" ) {
    
                $musculo->viernes = 0;
                $musculo->save();
               

            } else if ( $dia == "SABADO" ) {

                $musculo->sabado = 0;
                $musculo->save();

            } else if ( $dia == "DOMINGO" ) {

                $musculo->domingo = 0;
                $musculo->save();
              

            }
            return redirect('add_'.$dia);
            
        } else if ( $tipo_rutina->tipo == 1 ) {

            $musculo = MusculosDia::where('user_id',$user)->where('musculo_id',$musculo)->first();

            if ( $dia == 1 ) {

                $musculo->d1 = 0;
                $musculo->save();
           
            } else if ( $dia == 2 ) {

                $musculo->d2 = 0;
                $musculo->save();

            } else if ( $dia == 3 ) {

                $musculo->d3 = 0;
                $musculo->save();

            } else if ( $dia == 4 ) {

                $musculo->d4 = 0;
                $musculo->save();

            } else if ( $dia == 5 ) {

                $musculo->d5 = 0;
                $musculo->save();

            } else if ( $dia == 6 ) {

                $musculo->d6 = 0;
                $musculo->save();

            } else if ( $dia ==7 ) {
                
                $musculo->d7 = 0;
                $musculo->save();
                
            }
            return redirect('add_'.$dia);
        }
        return redirect('mi_rutina');
    }

    // AÑADIR EJERCICIO A MUSCULO
    public function add_ejercicio(){

        $user = Auth::user()->id;

        $ejercicios = EjerciciosUsuario::where('user_id',$user)->where('activo',1)->get();
        
        $ejercicios_inactivos = EjerciciosUsuario::where('user_id',$user)->where('activo',0)->get();

        $musculos = MusculosUsuario::where('user_id',$user)->get();

        return view('añadir_ejercicio',compact('musculos','ejercicios','ejercicios_inactivos'));
    }

    // AÑADIR EJERCICIO A MUSCULO
    /*public function add_musculo_a_ejercicio($musculo,$ejercicio){

        $user = Auth::user()->id;
        /*
        $ejercicio = new EjerciciosUsuario;
        $ejercicio->user_id = $user;
        $ejercicio->musculo_id = ? ;
        $ejercicio->nombre = ? ;
        $ejercicio->peso = 0;
        $ejercicio->s_totales = 0;
        $ejercicio->s_hechas = 0;
        $ejercicio->activo = 1;
        $ejercicio->save();

    }*/

    // ACTIVAR EJERCICIO
    public function act_ejercicio($id){

        $ejercicio = EjerciciosUsuario::where('id',$id)->first();
        $ejercicio->activo = 1;
        $ejercicio->save();
        
        return redirect('ejercicio');
    }

    // DESACTIVAR EJERCICIO
    public function des_ejercicio($id){

        $ejercicio = EjerciciosUsuario::where('id',$id)->first();
        $ejercicio->activo = 0;
        $ejercicio->save();
        
        return redirect('ejercicio');
    }

    // CABMIAR MI RUTINA
    public function cambiar_mi_rutina($tipo){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;

        $cambiar_rutina = TipoRutina::where('user_id',$user)->first();

        if ( $tipo == 0 ) {
            
            $cambiar_rutina->tipo = 0;
            $cambiar_rutina->save();
            
        } else if ( $tipo == 1 ) {
            
            $cambiar_rutina->tipo = 1;
            $cambiar_rutina->save();
            
            
        }
        return redirect('mi_rutina'); 
    }

    public function elegir_dias(Request $request){

        
        if (Auth::guest()){
            return redirect('/login');
        }

        if ( $request->input('dias') == 7 ) {

            return "Usa mejor la rutina semanal";

        }
        $user = Auth::user()->id;

        $dias_rutina = TipoRutina::where('user_id',$user)->first();
       
        $dias_rutina->dias = $request->input('dias');

        $dias_rutina->save();

        return redirect('mi_rutina');
    }
    
    public function editar_rutinas_dias(){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;

        $musculos = MusculosUsuario::where('user_id',$user)->get();



        return "Acabar añadir musculos o descanso al dia";
    }


    // MIS ENTRENOS
    public function mis_entrenos(){

        if (Auth::guest()){
            return redirect('/login');
        }

        $user = Auth::user()->id;

        $registros = UltimosEntreno::where('user_id',$user)->get();

        return view('registro_mensual',compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       // AÑADE EL EJERCICIO
    public function store(Request $request)
    {

        
        $user = Auth::user()->id;       
        
        $ejercicio = new EjerciciosUsuario;
        $ejercicio->nombre = $request->input('NombreEjercicio');
        
        if ( $request->input('musculo') == "ESPALDA" ) {

            $ejercicio->musculo_id = 1;
            $musculo_id=1;

        } else  if ( $request->input('musculo') == "PECHO" ) {

            $ejercicio->musculo_id = 2;
            $musculo_id=2;

        } else  if ( $request->input('musculo') == "HOMBRO" ) {

            $ejercicio->musculo_id = 3;
            $musculo_id=3;

        } else  if ( $request->input('musculo') == "PIERNA" ) {

            $ejercicio->musculo_id = 4;
            $musculo_id = 4;

        } else  if ( $request->input('musculo') == "TRICEPS" ) {

            $ejercicio->musculo_id = 5;
            $musculo_id=5;

        } else  if ( $request->input('musculo') == "BICEPS" ) {

            $ejercicio->musculo_id = 6;
            $musculo_id = 6;

        } else  if ( $request->input('musculo') == "GEMELO" ) {

            $ejercicio->musculo_id = 7;
            $musculo_id = 7;

        } else  if ( $request->input('musculo') == "ABDOMINALES" ) {

            $ejercicio->musculo_id = 8;
            $musculo_id = 8;

        } else  if ( $request->input('musculo') == "TRAPECIO" ) {

            $ejercicio->musculo_id = 9;
            $musculo_id = 9;

        }  else  if ( $request->input('musculo') == "LUMBAR" ) {

            $ejercicio->musculo_id = 10;
            $musculo_id = 10;
        }

        $ejercicio->user_id = $user;
        $ejercicio->activo = 1;
        $ejercicio->save();

        return redirect('ejercicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
