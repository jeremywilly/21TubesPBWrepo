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

	public function escapeString() {
		
	}
}

$db = new MySQLDB("localhost","root","","ide"); //diinisialisasi objek db nya

?>