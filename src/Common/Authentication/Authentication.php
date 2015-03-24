<?php

function LoginAuth($data) {
	$username = clean($data['username']);

	$password = clean($data['password']);

	$authType = clean($data['authType']);

	$_SESSION["user"] = new User($username, $password);
	$_SESSION["user"]->setFirstName("Chase");
	$_SESSION["user"]->setLastName("Stewart");
	$_SESSION["user"]->setStatus(ACTIVE);

	if ($authType === 'InMemory') {
		$auth = new InMemory();
	}
		

	if ($authType === 'FileBased') {
		$auth = new FileBased();
	}

	if ($authType === 'MySQL') {
		$auth = new MySQL();
	}

		
	if (ProcessLoginForm($auth, $_SESSION["user"])) {
		header("LOCATION: http://localhost/Project1/home");
	} 
	else {
		header("LOCATION: http://localhost/Project1/auth");
	}
}

function ProcessLoginForm(CommonAuthInterface $param_auth, User $param_user) {
	
	if ($param_auth->authenticate($param_user)) {
		return true;
	}

	return false;
}
