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

	<h2>Usuario > Editar:</h2>
	
	{{ Form::open(array('url' => 'usuarios/' . $usuario->id, 'method' => 'put')) }}
	<h3>Nombre de Usuario: {{ Form::text('nombreusuario', $usuario->nombreusuario) }}</h3>
	<h3>Email: {{ Form::text('email', $usuario->email) }}</h3>
	<h3>Password: {{ Form::text('password', $usuario->password) }}</h3><br/>
	<h4>Comentario 1: Haga "click" en GUARDAR para salvar los datos ingresados.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014</footer>

	</body>   
</html>
