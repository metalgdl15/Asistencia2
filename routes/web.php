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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', function (){
  return view('inicio');
});

//Route::get('/materias','MateriaController@index');
/*Route::get('/alumnos','alumnosController@index');
Route::get('/dependencias','dependenciasController@index');
Route::get('/empleados','empleadosController@index');
Route::get('/roles','rolesController@index');

Route::get('/materia/listado','MateriaController@listado');
Route::get('/materia/create', 'MateriaController@create');
Route::post('/materia/store', 'MateriaController@store');
Route::get('/materia/show/{id}', 'MateriaController@show');
Route::get('/materia/edit/{id}', 'MateriaController@edit');
Route::post('/materia/update/{id}', 'MateriaController@update');

Route::post('/materia/reporte-pdf', 'MateriaController@reportePdf');
*/
Route::resource('materia', 'MateriaController');
Route::resource('alumno', 'alumnoController');           

/*Route::get('/materia/create', function(){
  return view('materias.formMateria');
});

Route::post('/materia/store', function(){
  return view('materias.storeMaterias');
  //logica del codigo
});
  
  Route::get('/materia/show/{id}', function($id){
   
    return view('materias.showMateria',compact('id'));
  });



Route::get('/materia/edit/{id}', function($id){
  return view('materias.formEditMateria',compact('id'));
});

Route::post('/materia/update/{id}', function($id){
  //logica del codigo
  //redireccionar /materia/show/$id
});
*/



/*
//Primer opcion para rutas (no se recomienda su us)
Route::get('/materias', function (){
  return view('materias.indexMaterias');
});
*/