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
    <h2>Cuotas > Ver:</h2>
	<h4>Comentario 1: Haga "click" en EDITAR para cambiar los valores de una Cuota.</h4>
	<h4>Comentario 2: Haga "click" en ELIMINAR para borrar los valores de una Cuota permanentemente.</h4><br/>
	

	<button><a href="/cuotas/{{ $cuota->id }}/edit">Editar</a></button><br /><br/>
	{{ Form::open(array('url' =>'cuotas/' . $cuota->id, 'method' => 'delete')) }}

	<button><a>{{ Form::submit('Eliminar') }}</a></button>

	{{ Form::close() }}
	<h3>Fecha Cuota: {{ $cuota->FechaCuota }}</h3>
	<h3>Monto Pagado: {{ $cuota->MontoPagado }}</h3> 
    <!--<h3>Alumno ID: {{ $cuota->alumno_id }}</h3>-->

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014</footer>

	</body>   
</html>
