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

	<h2>Reporte > Crear:</h2>

	{{ Form::open(array('url' => 'usuarios')) }}
	<h3>Nombre de Usuario: {{ Form::text('nombreusuario', null, array('placeholder' => 'Introduce tu Usuario')) }} (*)</h3>
	<h3>Email:{{ Form::text('email', null, array('placeholder' => 'Introduce tu E-mail')) }} (*)</h3>
	<h3>Password: {{ Form::text('password', null, array('placeholder' => 'Introduce tu Password')) }} (*)</h3>
	<br/><h4>(*) Todos los campos son obligatorios.</h4>
	<h4>Comentario 1: Haga "click" en GUARDAR para salvar el nuevo Usuario ingresado.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><br/><button><h2>{{HTML::link('logout','SALIR')}}</h2></button>
	<button><h3><a href="/alumnos/">VOLVER</a></button></h3></button>

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014</footer>
	</body>   
</html>

