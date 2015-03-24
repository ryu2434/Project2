<?php

namespace Common\Authentication;

use PDO;

class MySQL implements IAuthentication {
	
	private $dbh;
	private $host;
	private $username;
	private $password;
	private $db;

	public function __construct () {
		$this->db = "test2";
		$this->host = "localhost";
		$this->username = 'root';
		$this->password = '';
		
	}

	public function authenticate($param_username, $param_password) {
		try {
			$dbh = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo 'Connection Established';

			$stmt = $dbh->prepare("SELECT username, password FROM users WHERE username='".$param_username."' AND password='".$param_password."';");
			$stmt->execute();

			$result = $stmt->fetchAll();

			if (count($result) >= 1) {
				var_dump ($result);
				return true;	
			}




		} catch (PDOException $e) {
			echo 'Connection Not Established';
			echo 'ERROR: '. $e->getMessage().'<br />';
			
		}
		
		return false;
	}

	
}