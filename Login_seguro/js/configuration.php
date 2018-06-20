<?php

define('BASE_PATH','http://localhost/Login_seguro/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'jornaleconomico');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Falha na conexão à base de dados: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Falha na conexão à base de dados: " . mysql_error());

?>