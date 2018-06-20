<?php 
ob_start();
session_start();
require_once 'configuration.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Página de inicio</title>
    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
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
     <nav class="navbar navbar-light" style="background-color: rgb(255, 64, 54);">
    <div class="topo col-sm-12">
        <h1 class="logo_topo"><img src="http://localhost/Login_seguro/assets/img/JE.png"></h1>
    </div>
    </nav>
     <div class="navbar navbar-light" style="background-color: #F5F5F5;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
				</button>
			</div>
            
    <a class="nav navbar-brand" href="http://localhost/Login_seguro/welcome.php"><h2>Home</h2></a>
    <a class="nav navbar-brand" href="http://localhost/Login_seguro/periodos.php"><h2>Piquetes</h2><span class="sr-only"></span></a>
    <a class="nav navbar-brand" href="http://localhost/Login_seguro/gestao_eventos.php"><h2>Eventos</h2><span class="sr-only"></span></a>
    <ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown">
							<h4>Olá,  	
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</h4></a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="account.php"><h5>Minha conta</h5></a> </li>
							<li class="divider"></li>
							<li> <a href="logout.php"><h5>Sair</h5></a> </li>
						</ul>
						<?php } ?>
					</li>
				</ul>
			<!--/.nav-collapse -->
		</div>
	</div>