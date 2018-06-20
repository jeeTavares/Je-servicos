<?php require_once 'templates/header.php';?>

<html lang="pt">
<head>
    
<meta name="viewport" content="width=device-width, shrink-to-fit=no">
    <title>Per&iacute;odos</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Georgia' rel='stylesheet' type='text/css'>
  
</head>
  
<style>
    body{
    background-color:#fff;
    font-family: 'Georgia', serif;
    font-size: 18px;
    }
    input:placeholder-shown {
    font-size:14px;
    }
    input[type="text"] {
    font-family: Georgia;
    font-size: 14px;
    }
    textarea::-webkit-input-placeholder {
    font-size: 14px;
    }
</style>

  <body>
				
    <div class="container text-center">
      <h1 class="display-3 m-5">Bem-Vindo ao Jornal Económico!</h1>
      <p class="lead">
        <h3>Aqui pode consultar e registar os eventos que irão ser realizados, assim como os horários realizados pelos piquetes.</h3>
      </p>
    </div>
<p></p>
<br></br>
    <fieldset>
      <form>
      </form>
    </fieldset>
    <p></p>
    <br></br>

    <fieldset>
      <div class="container">
        <div class="form-group">
          <p></p>
          <form method="GET" action="http://localhost/Login_seguro/totaleventos.php">
            <button type="submit" class="btn btn-primary col-sm-7"><h4>Ver todos os Eventos</h4></button>
          </form>
        </div>
      </div>
    </fieldset>
        <p></p>
    <fieldset>
      <div class="container">
        <div class="form-group">
          <p></p>
        <form method="GET" action="http://localhost/Login_seguro/totalperiodos.php">
          <button type="submit" class="btn btn-primary col-sm-7"><h4>Ver todos os Registos de Piquetes</h4></button>
        </form> 
        </div>
      </div>
    </fieldset>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn/bootstrap/4.0.0/js/bootstrap.js"></script>

  </body>
</html>

     			
     			

