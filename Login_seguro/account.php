<?php require_once 'templates/header.php';?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->account( $_POST );
			if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
		} catch (Exception $e) {
			$error = $e->getMessage();
		} 
	}
?>
<meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <title>Minha conta</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet'>

	<style>
      body {
        font-family: 'Georgia', serif;
        font-size: 18px;
      }
    </style>

	<div class="content">
     	<div class="container">
     		<div class="col-md-8 col-sm-8 col-xs-12">
     			<?php require_once 'templates/message.php';?>
     			<h1>Minha conta:</h1><br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form">
					<div class="form-group">
						<span for="inputEmail3" class="col-sm-4 control-span">Nome</span>
						<div class="col-sm-8">
							<p> <?php echo $_SESSION['name']; ?> </p>
						</div>
					</div>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">E-mail</span>
						<div class="col-sm-8">
							<p> <?php echo $_SESSION['email']; ?> </p>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">Palavra-passe atual</span>
						<div class="col-sm-8">
							<input name="old_password" id="old_password" type="text">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span"> Nova palavra-passe</span>
						<div class="col-sm-8">
							<input name="password" id="password" type="text">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span"> Confirmar palavra-passe</span>
						<div class="col-sm-8">
							<input name="confirm_password" id="confirm_password" type="text">

						</div>
					</div>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
					<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
					
					
					<div class="form-group">
						<div class="col-sm-offset-4 col-sm-8">
							<button type="submit" class="btn btn-primary btn-default" id="submit_btn" data-loading-text="Alterando palavra-passe...."><h4>Alterar palavra-passe</h4></button>
						</div>
					</div>
				</form>
			</div>
     	</div>
    </div> <!-- /container -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/account.js"></script>    

	

