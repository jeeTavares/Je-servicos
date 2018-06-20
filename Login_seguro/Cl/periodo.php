<?php
include 'Cl/DBclass.php';
class Cl_periodo extends mysqli
{
    /**
	 * @var va conexión à base de dados
	 */
	protected $_con;
	
	/**
	 * Inializar DBclass
	 */
	public function __construct()
	{
		$db = new Cl_DBclass();
		$this->_con = $db->con;
	}
	
	/**
	 * Registo de utilizadores
	 * @param array $data
	  */
	public function arrayhorario() {

        //estabelece ligação à base de dados
        $ligacao = $this->$con(); 
        //verifica se houve erro na ligação
        if (!$ligacao){ 
            return false;
        }
        $consulta = "SELECT * FROM piquet";
        if (!$resultado = $ligacao->query($consulta)) {
            echo(" Falha na consulta: ". $ligacao->error);
            $ligacao->close(); // fecha a ligação
            return false;
        }
        $horario = array();
         
        //percorrer os registos (linhas) da tabela
         while ($row = $resultado->fetch_assoc()){   //fetch associative array
             $temphorario = new Horario();
             $temphorario->setId($row["id"]);
             $temphorario->setNome($row["nome"]);
             $horario[] = $temphorario;
             }
    
        $resultado->free();     //liberta o resultado
        $ligacao->close();      //fecha a ligação
        return $horario;  //devolve o array
	}
	function CriaSelecthorario(){
        
        $horario = new Horario();  
        $operacoesbd = new Cl_DBclass(); 
        
        
        $arrayhorarios = $operacoesbd->arrayhorarios();
        
        echo '<select name="horario">';
 
        foreach($arrayhorario as $horario) {
            echo '<option value="'.$horario->getId().'">'.$horario->getNome().' </option>';
        }
        echo "</select>";
    }
 
    
    public function mostraFormNovoFuncionario(){
    ?>
        <form method="POST" action="periodos.php">
          Periodo:<br>
          <input type="text" name="nome"><br>
		  Hora Inicio:<br>
		  <input type="time" name="h_i"><br>
		  Hora Fim:<br>
		  <input type="time" name="h_f"><br>
          
    <?php
        $this->CriaSelecthorario();
    ?>
          <br><br>
          <input type="submit" value="Submit">
        </form>
      <?php
    }
}