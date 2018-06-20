<?php 
require_once 'templates/header.php';

$con= mysqli_connect('localhost', 'root', '', 'jornaleconomico') or die ('Sem conexao com o servidor');
$select = mysqli_select_db($con,'jornaleconomico');
$consulta = mysqli_query($con, "SELECT * FROM users");

?>
<html lang="pt">
  <head>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <title>totalperiodos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <title>Tabela Periodos</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>

  <style>
     body{
    background-color:#fff;
    font-family: 'Georgia', serif;
    font-size: 16px;
    }
    input:placeholder-shown {
    font-size:12px;
    }
    input[type="text"] {
    font-family: Georgia;
    font-size: 12px;
    }
    textarea::-webkit-input-placeholder {
    font-size: 12px;
}

a {
	color: #69C;
	text-decoration: none;
}
a:hover {
	color: #F60;
}
h1 {
	font: 1.7em;
	line-height: 110%;
	color: #000;
}
p {
	margin: 0 0 20px;
}


input {
	outline: none;
}
input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
	display: none; 
}
input[type=search] {
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: 55px;
	
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	width: 130px;
	background-color: #fff;
	border-color: #66CC75;
	
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}

input:-moz-placeholder {
	color: #999;
}
input::-webkit-input-placeholder {
	color: #999;
}
 </style>

  <body> 
  <form method="post" action="http://localhost/Login_seguro/totalperiodos.php" id="formperiodos" name="formperiodos">
      <h1 class="display-3 m-5">Total de Registos - Piquetes</h1>
    </form>
<p></p>
<div class="container">
<form name="searchform" method="post" action="totalperiodos.php">
<input type="search" name="search" placeholder="Procurar..">
</form> 
<br>
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data de Criação</th>
              </tr>
              <?php
                $db = new mysqli('localhost', 'root', '', 'jornaleconomico');
                if(mysqli_connect_errno()){
                  echo mysqli_connect_error();
                }
                $result = $db->query('SELECT * FROM users');
                if($result){
                  while ($row = $result->fetch_assoc()){
              ?>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $row["user_id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo date("d/m/Y", strtotime($row["created"])); ?></td>
              </tr>
               <?php  
               }
                $result->free();
              }
                $db->close(); ?>
              </tbody>
          </table>
        </div>
      <br><br/>

    <div class="container">
      <fieldset>
        <form method="GET" action="http://localhost/Login_seguro/welcome.php">
          <button type="submit" class="btn btn-secondary col-sm-1"><h4>Voltar</h4></button>
        </form>
      </fieldset>
    </div>

  </body>
</html>