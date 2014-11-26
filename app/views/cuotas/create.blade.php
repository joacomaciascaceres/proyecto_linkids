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

	<h2>Cuotas > Crear:</h2>

	{{ Form::open(array('url' => 'cuotas')) }}
	<h3>Fecha Cuota: {{ Form::text('FechaCuota', null, array('placeholder' => 'Introduce la Fecha de tu Cuota')) }} (*)</h3>
	<h3>Monto Pagado: {{ Form::text('MontoPagado', null, array('placeholder' => 'Introduce el Monto Pagado')) }} (*)</h3>
    
    <br/><h4>(*) Todos los campos son obligatorios.</h4>
	<h4>Haga "click" en GUARDAR para salvar la nueva Cuota ingresada.</h4></br>
	<button>{{ Form::submit('Guardar') }}</button>
	{{ Form::close() }}

	<br/><footer>Proyecto Ingeniería de Software - UTEM 2014<br/>
				por Gladys Cerro Miranda y Joaquín Macías Cáceres</footer>
	</body>   
</html>

