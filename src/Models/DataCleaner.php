<?php

namespace Models;

class DataCleaner {
	

	/** Function is used to parse the given data and certify it as clean 
	* @param data
	*/
	function clean ($data) {
		if(!isset($data)) {
			throw new InvalidArgumentException(__METHOD__.'('.__LINE__.'): Error: String is null');
		}
/*
		if(!(getype($data) === "string")) {
			throw new InvalidArgumentException(__METHOD__.'('.__LINE__.'): Error: String is null');
		}
*/
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
	

}