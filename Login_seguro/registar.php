<?php require_once 'configuration.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data)$success = USER_REGISTRATION_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<nav class="navbar navbar-light" style="background-color: rgb(255, 64, 54);">
		<div class="topo col-sm-6">
			<h1 class="logo_topo"><img src="http://localhost/Login_seguro/assets/img/JE.png"></h1>
		</div>
	</nav>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de registro de usuarios</title>

    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <style>
    body{
		background-color:#fff
    }
</style>
 
  <body>
	<div class="container">
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			
			
			<div class="form-header">
			<div><h3><strong><center>Efetuar registo</center></strong></h3></div>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div>
					<input name="name" id="name" type="text" class="form-control" style="font-size:14px;" placeholder="Nome"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="email" id="email" type="email" class="form-control" style="font-size:14px;" placeholder="E-mail" > 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="password" id="password" type="password" class="form-control" style="font-size:14px;" placeholder="Palavra-passe"> 
					<span class="help-block"></span>
				</div>
				<div>
					<input name="conf_password" id="conf_password" type="password" class="form-control" style="font-size:14px;" placeholder="Confirmar palavra-passe"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-primary btn-block btn-login" type="submit" id="submit_btn" data-loading-text="Registando....">Registe-se</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Esqueceu-se da sua palavra-passe? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php">  Iniciar sessão  </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>