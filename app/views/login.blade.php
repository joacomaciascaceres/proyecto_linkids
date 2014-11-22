
 <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>Proyecto LinKids - Ingresar</title>

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

     <body>
        
        <div class="welcome">
        	<h3>[LinKids - Panel de Usuario]</h3>
        	@if (Session::has('mensaje_error'))
			<span>{{ Session::get('mensaje_error') }}</span>
			@endif
 
			{{ Form::open(array('url' => 'login' )) }}
    
   			{{ Form::label('email', 'Correo'); }}
    		{{ Form::text('email'); }}
    		{{ Form::label('password', 'Clave'); }} 
    		{{ Form::password('password'); }}
    		{{ Form::submit('Ingresar'); }}
 
			{{ Form::close() }}
		</div>
     </body>   
</html>


