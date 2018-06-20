<?php
class Cl_User
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
	public function registration(array $data)
	{
		if(!empty( $data)){
			
			
			$trimmed_data = array_map('trim', $data);
			
			$name = mysqli_real_escape_string( $this->_con, $trimmed_data['name']);
			$password = mysqli_real_escape_string( $this->_con, $trimmed_data['password']);
			$cpassword = mysqli_real_escape_string( $this->_con, $trimmed_data['conf_password']);
			
			
			// Verifica o correio eletrónico:
			if (filter_var( $trimmed_data['email'], FILTER_VALIDATE_EMAIL)) {
				$email = mysqli_real_escape_string( $this->_con, $trimmed_data['email']);
			} else {
				throw new Exception("Por favor, introduza um endreço de e-mail válido!");
			}
			
			
			if((!$name) || (!$email) || (!$password) || (!$cpassword)) {
				throw new Exception(FIELDS_MISSING);
			}
			if ($password !== $cpassword) {
				throw new Exception(PASSWORD_NOT_MATCH);
			}
			$password = md5( $password );
			$query = "INSERT INTO users (user_id, name, email, password, created) VALUES (NULL, '$name', '$email', '$password', CURRENT_TIMESTAMP)";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			};
		} else{
			throw new Exception(USER_REGISTRATION_FAIL);
		}
	}
	/**
	 * Este metodo para iniciar sessao
	 * @param array $data
	 * @return retorna falso ou verdadeiro
	 */
	public function login(array $data)
	{
		$_SESSION['logged_in'] = false;
		if(!empty($data)) {
			
			
			$trimmed_data = array_map('trim', $data);
			
			
			$email = mysqli_real_escape_string( $this->_con,  $trimmed_data['email']);
			$password = mysqli_real_escape_string( $this->_con,  $trimmed_data['password']);
				
			if((!$email) || (!$password)) {
				throw new Exception(LOGIN_FIELDS_MISSING);
			}
			$password = md5($password);
			$query = "SELECT user_id, name, email, created FROM users where email = '$email' and password = '$password' ";
			$result = mysqli_query($this->_con, $query);
			$data = mysqli_fetch_assoc($result);
			$count = mysqli_num_rows($result);
			mysqli_close($this->_con);
			if( $count == 1){
				$_SESSION = $data;
				$_SESSION['logged_in'] = true;
				return true;
			}else{
				throw new Exception(LOGIN_FAIL);
			}
		} else{
			throw new Exception(LOGIN_FIELDS_MISSING);
		}
	}
	
	/**
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	
	public function account(array $data)
	{
		if(!empty($data)){
			
			$trimmed_data = array_map('trim', $data);
			
			
			$password = mysqli_real_escape_string($this->_con, $trimmed_data['password']);
			$cpassword = $trimmed_data['conf_password'];
			$user_id = mysqli_real_escape_string($this->_con, $trimmed_data['user_id']);
			
			if((!$password) || (!$cpassword)) {
				throw new Exception(FIELDS_MISSING);
			}
			if ($password !== $cpassword) {
				throw new Exception(PASSWORD_NOT_MATCH);
			}
			$password = md5($password);
			$query = "UPDATE users SET password = '$password' WHERE user_id = '$user_id'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				return true;
			}
		} else{
			throw new Exception(FIELDS_MISSING);
		}
	}
	

	public function logout()
	{
		session_unset();
		session_destroy();
		header('Location: index.php');
	}
	
	/**
	 * @param array $data
	 * @throws Exception
	 * @return boolean
	 */
	public function forgetPassword(array $data)
	{
		if(!empty($data)){
			
			// 
			$email = mysqli_real_escape_string($this->_con, trim( $data['email']));
			
			if((!$email)) {
				throw new Exception(FIELDS_MISSING);
			}
			$password = $this->randomPassword();
			$password1 = md5($password);
			$query = "UPDATE users SET password = '$password1' WHERE email = '$email'";
			if(mysqli_query($this->_con, $query)){
				mysqli_close($this->_con);
				$to = $email;
				$subject = "Pedido de nova palavra-passe";
				$txt = "Sua nova palavra-passe ".$password;
				$headers = "From: jessipereira.14@gmail.com" . "\r\n" .
						"CC: jessipereira.14@gmail.com";
					
				mail($to,$subject,$txt,$headers);
				return true;
			}
		} else{
			throw new Exception(FIELDS_MISSING);
		}
	}
	
	/**
	 * @return string
	 */
	
	private function randomPassword() {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array(); //$pass deve ser declarado como um array
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //Conversão do array
	}
}