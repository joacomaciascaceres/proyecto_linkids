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
     <h2>Usuario > Reporte:</h2>

	{{ Form::open(array('url' => 'reportes')) }}
	<h3>Comida: {{ Form::text('Comida', null, array('placeholder' => 'Introduce la Comida')) }}</h3>
	<h3>Colación: {{ Form::text('Colacion', null, array('placeholder' => 'Introduce tu Colación')) }}</h3> 
	<h3>Siesta: {{ Form::text('Siesta', null, array('placeholder' => 'Introduce tu Siesta')) }}</h3> 
	<h3>Fecha: {{ Form::text('Fecha', null, array('placeholder' => 'Introduce tu Fecha')) }}</h3>
	<h3>Cuerpo: {{ Form::text('Cuerpo', null, array('placeholder' => 'Introduce tu Cuerpo')) }}</h3>
    <h3>Alumno ID: {{ Form::text('alumno_id', null, array('placeholder' => 'Introduce el Alumno ID')) }}</h3>
	<h4>Comentario 1: Haga "click" en GUARDAR para salvar el nuevo Reporte ingresado.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014</footer>
	</body>   
</html>


