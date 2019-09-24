<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () { 
    return "home";
});



Auth::routes();
Route::get('/', function () { 
    return redirect('home');
}); 

// SEEDER
Route::get('/asdf21414aathat34252', 'FitController@seed');


Route::get('/home', 'FitController@home');





// ENTRENAR
Route::get('/entrenar', 'FitController@entrenar');


// SUBIR SERIES
Route::get('/add_s/{id}', 'FitController@add_serie');


// QUITAR SERIES
Route::get('/quit_s/{id}', 'FitController@quit_serie');


// EDITAR PESO
Route::get('/editar_peso/{id_ejercicio}/{peso}', 'FitController@editar_peso');


// EDITAR SERIES
Route::get('/editar_series/{id_ejercicio}/{series}', 'FitController@editar_series');


// MUSCULOS
Route::get('/musculo/{id}', 'FitController@musculo');


// MI RUTINA
Route::get('/mi_rutina', 'FitController@mi_rutina');


// EDITAR MI RUTINA
Route::get('add_{dia}', 'FitController@editar_rutina_semanal');


// AÑADIR MUSCULO DIA DE LA SEMANA - MI RUTINA
Route::get('add_{dia}/add{id}', 'FitController@add_musculo_rutina_semanal');


// QUITAR MUSCULO DIA DE LA SEMANA - MI RUTINA
Route::get('del_{dia}/del{id}', 'FitController@del_musculo_rutina_semanal');



// AÑADIR EJERCICIO - MI RUTINA
Route::get('ejercicio', 'FitController@add_ejercicio');


// GUARDAR EJERCICIO
Route::post('store', 'FitController@store');


// AÑADIR EJERCICIO A MUSCULO - MI RUTINA
//Route::get('add_{musculo}/add{ejercicio}', 'FitController@add_musculo_a_ejercicio');

// ACTIVAR EJERCICIO - MI RUTINA
Route::get('activar_{id}', 'FitController@act_ejercicio');

// DESACTIVAR EJERCICIO - MI RUTINA
Route::get('desactivar_{id}', 'FitController@des_ejercicio');


// ELEGIR DIAS - RUTINA POR DIAS
Route::post('dias', 'FitController@elegir_dias');


// EDITAR MI RUTINA POR DIAS
//Route::get('ad_{dia}', 'FitController@editar_rutinas_dias');


// CAMBIAR MI RUTINA
Route::get('/mi_rutina/{tipo}', 'FitController@cambiar_mi_rutina');


// MIS ENTRENOS
Route::get('/mis_entrenos', 'FitController@mis_entrenos'); 

// MIS ENTRENOS
Route::get('/guardar_entreno_{dia}', 'FitController@guardar_entreno'); 



