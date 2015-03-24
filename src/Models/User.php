<?php
define ('NON_ACTIVE', 0);
define ('ACTIVE', 1);

class User {
	private $username;		//string
	private $password; 		//string
	protected $firstName;	//string
	protected $lastName;	//string
	protected $status;		//int
	protected $lastLogin;	//unix date/time stamp

	public function __construct ($param_username, $param_password) {
		$this->username = $param_username;
		$this->password = $param_password;
	}
	public function getUsername () {
		return $this->username;
	}

	public function getPassword () {
		return $this->password;
	}

	public function getFirstName () {
		return $this->firstName;
	}

	public function setFirstName ($param_firstName) {
		$this->firstName = $param_firstName;
	}

	public function getLastName () {
		return $this->firstName;
	}

	public function setLastName ($param_lastName) {
		$this->lastName = $param_lastName;
	}

	public function getStatus () {
		return $this->firstName;
	}

	public function setStatus ($param_status) {
		$this->status = $param_status;
	}

	public function getLastLogin () {
		return $this->firstName;
	}

	public function setLastLogin($param_lastLogin) {
		$this->lastLogin = $param_lastLogin;
	}


}

