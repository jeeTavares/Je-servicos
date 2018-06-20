<?php require_once 'templates/header.php';?>
<html lang="pt">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>eventos com desloca&ccedil;&atilde;o</title>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
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

    <form method="post" action="http://localhost/Login_seguro/eve_comdeslocacao.php" id="formeventos" name="formeventos">
      <h1 class="display-3 m-5">Eventos com desloca&ccedil;&atilde;o</h1>
    </form>

    <div class="container">
      <fieldset>
        <form method="GET" action="http://localhost/Login_seguro/totaleventos.php">
          <button type="submit" class="btn btn-secondary col-sm-1"><h4>Voltar</h4></button>
        </form>

      </fieldset>
    </div>


  </body>
</html>