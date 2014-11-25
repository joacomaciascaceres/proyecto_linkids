<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/img/favicon.png" />
	  <title>Bienvenidos a LinKids</title>

	  <!--Hoja de Estilo-->
      <style>
        	@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-image: url(/img/fondos.png);
		}
		h4{
			font-size: 12px;
			margin: 8px 0 0 0;
		}
		h2{
			font-size: 20px;
			margin: 10px 0 0 0M
		}
		ul, h3{
			font-size: 15px;
			margin: 8px 0 0 0;
		}
		button, a, a:visited {
			text-decoration:none;
		}
		footer{
			font-size: 11px;
			margin: 8px 0 0 0;
			text-align: center;
		}
        </style>
     <!--Fin Hoja de Estilo-->

     <body>
    <h2>Usuario > Ver:</h2>
	<h4>Comentario 1: Haga "click" en EDITAR para cambiar los valores de un Usuario.</h4>
	<h4>Comentario 2: Haga "click" en ELIMINAR para borrar los valores de un Usuario permanentemente.</h4><br/>
	
	<button><a href="/usuarios/{{ $usuario->id }}/edit">Editar</a></button><br/><br/>
	{{ Form::open(array('url' =>'usuarios/' . $usuario->id, 'method' => 'delete')) }}
	<button><a>{{ Form::submit('Eliminar') }}</a></button>

	{{ Form::close() }}
	<h3>Usuario:</h3> {{ $usuario->nombreusuario }}
	<h3>Email:</h3> {{ $usuario->email }}
	<!--<h3>Password:</h3> {{ $usuario->password }}<br/>-->

	<br/><br/><h3>Opciones:</h3>
	<button><a href="/alumnos/">Ir a Alumnos</a></button><br/><br/>

	<button><h2>{{HTML::link('logout','SALIR')}}</h2></button>

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014<br/>
				por Gladys Cerro Miranda y Joaquín Macías Cáceres</footer>

	</body>   
</html>

