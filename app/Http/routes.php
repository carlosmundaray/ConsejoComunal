<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');
});

  Route::resource('user','UserController');
  Route::resource('censo','CensoController');
  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

  Route::get('estado', function(){
  $id = Input::get('option');
  $procesos = Comunal\Municipios::where('id_estado', $id)->get();
  return $procesos->lists('municipio', 'id');
  });
    
  Route::get('municipio', function(){
  $id = Input::get('option');
  $procesos = Comunal\parroquias::where('id_municipio', $id)->get();
  return $procesos->lists('parroquia', 'id');
  });
  
Route::get('reporte/socio_economico', 'ReporteController@socio_economico');

  
  
  Route::post('censo/grupo', 'CensoController@grupo_familiar_store');