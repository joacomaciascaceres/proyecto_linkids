<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ingreso de usuarios</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../favicon.ico">
		<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../font-awesome/css/font-awesome.css">
         <?php echo HTML::style('../../css/login.css'); ?>
	     </head>    
         <body>
        <div id="container">
            <div id="logo">
                <img src="{{ asset('../../img/kids.png') }}" alt="" width="21" height="236">
            </div>
            <div id="loginbox">            
                <form action="login" method="post">
    				<p>Introduzca usuario y contraseña para continuar.</p>
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      <input class="form-control" id="email" placeholder="Usuario" type="string" name="email"> 
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" id="password" placeholder="Contraseña" type="string" name="password">
                    </div>
                    <div class="form-actions clearfix">                      
 <input class="btn btn-block btn-primary btn-default" value="Entrar" type="submit">
                    </div>
                    <div class="footer-login">
                        <div class="pull-left text">
                             
                        </div>
                        
                    </div>
                </form>
                </div>
        </div>
        
        <?php echo HTML::script('../../js/jquery.js'); ?> 
        <?php echo HTML::script('../../js/jquery-ui.js'); ?> 
         <?php echo HTML::script('../../js/login.js'); ?>  
</body>
</html>