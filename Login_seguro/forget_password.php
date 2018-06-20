<?php require_once 'configuration.php'; ?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->forgetPassword( $_POST );
			if($data)$success = PASSWORD_RESET_SUCCESS;
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
    <title>Esqueceu-se da sua palavra-passe?</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
			<div><h3><strong><center>Recuperar palavra-passe</center></strong></h3></div>
			</div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" id="forgetpassword-form" method="post" class="form-register" role="form">
				<div>
					<input id="email" name="email" type="email" class="form-control" style="font-size:14px;" placeholder="E-mail">  
					<span class="help-block"></span>
				</div>
				<button class="btn btn-primary btn-block btn-login" type="submit" id="submit_btn" data-loading-text="Alterando palavra-passe....">Alterar palavra-passe</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="index.php">  Iniciar sessão  </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="registar.php"> Registe-se </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/forgetpassword.js"></script>
  </body>
</html>