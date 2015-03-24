<?php


	/******************************
		ABSTRACT CLASS CommonAuth
	*******************************/
	/** Creates a common authentication object that can be
	* used for a variety of authentication methods 
	*
	*/
	interface CommonAuthInterface {

		//METHODS
		public function authenticate($user);
		

	}	