<?php

// dari slide_09 v2 slide 30
class MySQLDB{
	protected $servername;
	protected $username;
	protected $password;
	protected $dbname;

	protected $db_connection;

	public function __construct ($servername, $uname, $pass, $DBname)  { //deliberately using weird param names  	
		$this->servername = $servername;
		$this->username = $uname;
		$this->password = $pass;
		$this->dbname = $DBname;
	}

	public function openConnection() {
		$this->db_connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname );

		//check connection
		if($this->db_connection->connect_error) { //kl error, die..
			die('Could not connect to ' . $this->servername);
		}
	}

	public function executeSelectQuery ($sql) {
		$this->openConnection();
		$query_result = $this->db_connection->query($sql); //TRUE or FALSE
		$this->closeConnection();
		return $query_result;
	}

	public function closeConnection() {
		$this->db_connection->close();
	}

	public function escapeString($inputString) {
		$this->openConnection();
		$escapedString = $this->db_connection->real_escape_string($inputString);
		$this->closeConnection();
		return $escapedString;
	}

	public function prepareStmt($sql) {
		$this->openConnection();
		$preparedStmt = $this->db_connection->prepare($sql);
		$this->closeConnection();
		return $preparedStmt;
	}

	public function prepareandExecute($nameP, $emailP, $passP) {
		$this->openConnection();
		$sql = " INSERT INTO user (
			name, email, password
			)
		VALUES (
			?, ?, ?       
		); "; 

		$prepared_stmt = $this->db_connection->prepare($sql);
		$prepared_stmt->bind_param("sss", $nameP, $emailP, $passP);
		$prepared_stmt->execute();

		// $result = $prepared_stmt->get_result();

		$prepared_stmt->close();

		$this->closeConnection();
	}

	public function sameEmail($emailP) {
		$sql_check = "SELECT * FROM user WHERE email = '$emailP'"; // LIMIT 1";

		$this->openConnection();

		$result = $this->db_connection->query($sql_check);
		$row = mysqli_fetch_assoc($result); //expected mysqli_result, instead bool
		if ($emailP == $row['email']) {		//mysqli_num_rows($result) > 0
			$this->closeConnection();
			return TRUE; //udh ada
		}
		else {
			$this->closeConnection();
			return FALSE;
		}
	}

	public function checkAccount($emailLogin, $passLogin) {


		// $sql_check = "SELECT * FROM user WHERE email = '$emailLogin' AND password = '$passLogin'"; // LIMIT 1";
		$sql_check = "SELECT * FROM user WHERE email = '$emailLogin'"; // LIMIT 1";
		
		$this->openConnection();

		$result = $this->db_connection->query($sql_check);
		$data_customers = $result->fetch_array();	//diambil berupa array

		if (isset($data_customers) && $data_customers['password'] === $passLogin) {
            // $_SESSION['username'] = $username;
            // $_SESSION['is_login'] = TRUE;
            $this->closeConnection();
			return TRUE;
        }else
        {
            //echo 'The username or password are incorrect!';
			$this->closeConnection();
			return FALSE;
		}

		// pake mysql_num_rows()
		// if( mysql_num_rows($result) > 0 )	//kl ada
        // { 
        //     // $_SESSION["logged_in"] = true; 
        //     // $_SESSION["naam"] = $emailLogin; 
		// 	$this->closeConnection();
		// 	return TRUE;
        // }
        // else
        // {
        //     //echo 'The username or password are incorrect!';
		// 	$this->closeConnection();
		// 	return FALSE;
        // }

		// $this->closeConnection();
	}
}

$db = new MySQLDB("localhost","root","","delivery"); //diinisialisasi objek db nya
//										atau nama lain sesuain								
?>