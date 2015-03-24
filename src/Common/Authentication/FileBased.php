<?php

namespace Common\Authentication;

class FileBased implements IAuthentication {
	private $file;

	public function __construct() {
			$curDir = dirname(__FILE__);
			
			$this->file = fopen($curDir.DIRECTORY_SEPARATOR.'Local_User_DB.csv', 'r');
		}

	public function authenticate($param_username, $param_password) {
		

		if (is_null($this->file)) {
			echo "File Not Found";
			return false;
		}

		while (!feof($this->file) ) {

			$line_of_text = fgetcsv($this->file, 1024);

			//DOUBLE INDENT - I realize this is here, but I can not see a cleaner way to do it.
			if ($line_of_text[0] === $param_username && $line_of_text[1] === $param_password) {
			return true;
			}	
			
		}

		fclose($this->file);

		return false;
	}
}

