@extends('layout')

@section('content')

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/img/favicon.png" />
	  <title>Bienvenido a LinKids</title>

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
		h2{
			font-size: 20px;
			margin: 10px 0 0 0M
		}
		ul, h3{
			font-size: 15px;
			margin: 8px 0 0 0;
			text-align: center;
		}
		h4{
			font-size: 12px;
			margin: 8px 0 0 0;
		}
		a{
			color: #060606;
		}
		img {
			text-align: center;
		}
        </style>
     <!--Fin Hoja de Estilo-->

     <body>

	<h2>Lista de Usuarios:</h2>

	<h4>Comentario 1: Haga "click" en algún Usuario para ver el detalle.</h4>
	<ul>
    	@foreach($usuarios as $usuario)
    	<a href="usuarios/{{ $usuario->id }}">[{{ $usuario->nombreusuario }}]</a><br/>
    	@endforeach
	</ul>
	<h4>Comentario 2: Haga "click" para crear un nuevo Usuario.</h4><br/>
	<button><a href="usuarios/create">Nuevo Usuario</a></button>
    
    <br/><br/><button><h2>{{HTML::link('logout','SALIR')}}</h2></button>
	@stop
    
	<br/><img src="/img/imagenninos.png" alt="" width="150" height="147"><br/>

	</body>   
</html>