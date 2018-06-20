<?php
class Cl_DBclass
{
	/**
	 * @var $con llevará a cabo la conexión de base de datos
	 */
	public $con;
	/**
	 * Esto creará la conexión de base de datos
	 */
	//criação da conexao

	public function __construct()
	{
		$this->con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		if( mysqli_connect_error()) echo "Falha na conexão à base de dados: " . mysqli_connect_error();
	}
	
}