<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>Bienvenido a LinKids</title>
	  <link rel="shortcut icon" href="/img/favicon.png" />

	  <!--Hoja de Estilo-->
      <style>
        @import url(//fonts.googleapis.com/css?family=Lato:700);

		body{
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-image: url(/img/fondos.png);
		}
		logo {
			text-align:center;
		}
		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}
		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		h3 {
			font-size: 15px;
			margin: 8px 0 0 0;
		}
		footer{
			font-size: 11px;
			margin: 8px 0 0 0;
			text-align: center;
		}

        </style>
     <!--Fin Hoja de Estilo-->
</head>
     <body>
        
        <div class="welcome">
        	<h3>¡Bienvenido! - Panel Principal</h3>
        	<div id="logo">
                <img src="/img/imagenninos.png" alt="" width="150" height="147">
            </div>
        	@if (Session::has('mensaje_error'))
			<span>{{ Session::get('mensaje_error') }}</span>
			@endif
 
			{{ Form::open(array('url' => 'login' )) }}
    
   			<br/>{{ Form::label('email', 'Ingrese su correo:'); }}
    		<br/>{{ Form::text('email'); }}
    		<br/><br/>{{ Form::label('password', 'Ingrese su password:'); }} 
    		<br/>{{ Form::password('password'); }}
    		<br/><br/>{{ Form::submit('Ingresar'); }}

    		<br/><br/><button><a href="/usuarios/create">Registrarse</a></button>
 
			{{ Form::close() }}

			<footer>Proyecto Ingeniería de Software - UTEM 2014</footer>
		</div>
     </body>   
</html>


