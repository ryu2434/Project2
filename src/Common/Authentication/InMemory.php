<?php
	namespace Common\Authentication;

	class InMemory implements IAuthentication {
		private $users;

		public function __construct() {
			$this->users = array(array('SysAdmin', '123pass'),
								 array('Guest', 'password'));

		}

		public function authenticate($param_username, $param_password) {
			$isValid = false;
			//TODO: Figure out how to eliminate double indent at this location.
			foreach ($this->users as $row) {
				if ($this->checkUser($param_username, $param_password, $row)) {
					$isValid = true;
					break;
				}
			}

			return $isValid;
		}

		private function checkUser($param_username, $param_password, $param_row) {
			
			if ($param_username !== $param_row[0]) {
				return false;
			}

			if($param_password !== $param_row[1]) {
				return false;
			}
			
			return true;
		}

	}