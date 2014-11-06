<?php




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------

|

| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.

|

*/


/*
Route::get('/', function()

{
	
       return View::make('hello');

});


/*Route::get('prueba', function()
{
	return "esto es una prueba";
});

*/


/*Route::get('users', function()

{
	
       return View::make('users');

});

*/


/*Route::get('prueba', function()
{
       $usuarios = new Usuario;
	   
	   $usuarios->email = "gladys.bta@gmail.com";
	   $usuarios->password = "16123109";
	   
	   $usuarios->save();
	   
	  return "Usuario agregado a la base de datos";
	   
});

*/
Route::get('prueba', 'PruebaController@prueba');

Route::controller('prueba', 'PruebaController');



Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('usuarios', 'UsuarioController');
	
Route::resource('cuotas', 'CuotaController');

Route::resource('mensualidads', 'MensualidadController');

Route::resource('reportes', 'ReporteController');

Route::resource('alumnos', 'AlumnoController');

Route::get('login', function()
{
	return View::make('login');
});