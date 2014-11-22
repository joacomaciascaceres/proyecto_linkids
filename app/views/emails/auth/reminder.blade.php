<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="/img/favicon.png" />
	<title>Bienvenido a LinKids</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #060606;
			background-image: url(/img/fondos.png);
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

		a, a:visited {
			text-decoration:none;
		}

		img {
			text-align: center;
		}
		h3{
			font-size: 15px;
			margin: 8px 0 0 0;
		}
		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		footer{
			font-size: 20px;
			margin: 8px 0 0 0;
			text-align: center;
		}
	</style>
</head>
	<body>
		<h2>Recuperar la Password</h2><br/>

		<div>
			Tu puedes recuperar tu password, completando el siguiente formulario: {{ URL::to('password/reset', array($token)) }}.<br/>
			El enlace expirara en {{ Config::get('auth.reminder.expire', 60) }} minutos.
		</div>
	</body>
</html>
