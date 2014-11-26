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

	<h2>Alumnos > Editar:</h2>

	{{ Form::open(array('url' => 'alumnos/' . $alumno->id, 'method' => 'put')) }}
	<h3>Nombre Alumno: {{ Form::text('nombrealumno', $alumno->nombrealumno) }}</h3>
	<h3>Fecha de Nacimiento: {{ Form::text('fechanacimiento', $alumno->fechanacimiento) }}</h3>
	<h3>Nivel: {{ Form::text('nivel', $alumno->nivel) }}</h3>
	<h3>Dirección: {{ Form::text('direccion', $alumno->direccion) }}</h3>
	<h3>Teléfono: {{ Form::text('telefono', $alumno->telefono) }}</h3>
	{{ Form::hidden('usuario_id', $alumno->usuario_id) }}
	<h4>Comentario 1: Haga "click" en GUARDAR para salvar los datos ingresados.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><br/><button><h2>{{HTML::link('logout','SALIR')}}</h2></button>
	<button><h3><a href="/alumnos/">VOLVER</a></button></h3></button>
	
	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014<br/>
				por Gladys Cerro Miranda y Joaquín Macías Cáceres</footer>

	</body>   
</html>