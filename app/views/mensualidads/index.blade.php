@extends('layout')

@section('content')

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>Proyecto LinKids</title>

	  <!--Hoja de Estilo-->
      <style>
        	@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-color: #b4c731;
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

	<h2>Lista de Mensualidades:</h2>

	<h4>Comentario 1: Haga "click" en alguna Mensualidad para ver el detalle.</h4>
	<ul>
    	@foreach($mensualidads as $mensualidad)
    	<a href="mensualidads/{{ $mensualidad->id }}">{{ $mensualidad->fechavencimiento }}</a><br/>
    	@endforeach
  	</ul>
	<h4>Comentario 2: Haga "click" para crear un nuevo Mensualidad.</h4><br/>
	<button><a href="mensualidads/create">Nuevo</a></button>
	@stop
	<br/><img src="/img/logoeduplan.png"><br/>

	</body>   
</html>



