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
//Route::get('prueba', 'PruebaController@prueba');

//Route::controller('prueba', 'PruebaController');

Route::resource('usuarios', 'UsuarioController');


Route::get('/', function()
{
	return View::make('hello');
});
//Route::group(array('before' => 'auth'), function()
//{

Route::resource('cuotas', 'CuotaController');

Route::resource('mensualidads', 'MensualidadController');

Route::resource('reportes', 'ReporteController');

Route::resource('alumnos', 'AlumnoController');
//});

/*

Route::get('login', function()
{
	return View::make('login');
});
*/



//Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('hello');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');
});



// esta sera la ruta principal de nuestra aplicación
// aquí va a estar el formulario para registrase y para inicio de sesión
// esta ruta debe ser publica y por lo tanto no debe llegar el filtro auth
/*Route::get('login', function(){
    return View::make('login'); 
});
 

    
    // al momento de crear el usuario la clave debe ser encriptada
    // para utilizamos la función estática make de la clase Hash
    // esta función encripta el texto para que sea almacenado de manera segura
   
// esta ruta servirá para iniciar la sesión por medio del correo y la clave 
// para esto utilizamos la función estática attemp de la clase Auth
// esta función recibe como parámetro un arreglo con el correo y la clave

/*
Route::post('login', function(){
 
    // la función attempt se encarga automáticamente se hacer la encriptación de la clave para ser comparada con la que esta en la base de datos. 
    if (Auth::attempt( array('email' => Input::get('email'), 'password' => Input::get('password') ), true ))
	{
        return Redirect::to('usuarios');
    }
	else
	{
        return Redirect::to('login')->with('mensaje_login', 'Ingreso invalido');
    }
 
});
 
 */
// Por ultimo crearemos un grupo con el filtro auth. 
// Para todas estas rutas el usuario debe haber iniciado sesión. 
// En caso de que se intente entrar y el usuario haya iniciado session 
// entonces sera redirigido a la ruta login
Route::group(array('before' => 'auth'), function()
{
    
    Route::get('/', function(){
      
    });
});



