<?php
class Cl_event
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
	public function regist(array $data)
	{
		if(!empty( $data)){
			
			
			$trimmed_data = array_map('trim', $data);
			
			$nome = mysqli_real_escape_string( $this->_con, $trimmed_data['nome']);
			$locale = mysqli_real_escape_string( $this->_con, $trimmed_data['locale']);
			$organizer = mysqli_real_escape_string( $this->_con, $trimmed_data['organizer']);
			$date_time = mysqli_real_escape_string( $this->_con, $trimmed_data['date_time']);
			$dislocation = mysqli_real_escape_string( $this->_con, $trimmed_data['dislocation']);	
			
			// Verifica o correio eletrónico:
			if (filter_var( $trimmed_data['organizer'], FILTER_VALIDATE_NAME)) {
				$organizer = mysqli_real_escape_string( $this->_con, $trimmed_data['organizer']);
			} else {
				throw new Exception("Por favor, introduza um nome válido!");
			}
			
			if((!$name) || (!$locale) || (!$locale) || (!$organizer) || (!$date_time) || (!$dislocation)) {
				throw new Exception(FIELDS_MISSING);
			}

			$query = "INSERT INTO users (id, nome, locale, organizer, date_time, dislocation, created) VALUES (NULL, '$name', '$email', '$password', CURRENT_TIMESTAMP)";
			
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			};
		} else{
			throw new Exception(EVENT_REGISTRATION_FAIL);
		}
	}
	/**
	 * Este metodo para iniciar sessao
	 * @param array $data
	 * @return retorna falso ou verdadeiro
	 */