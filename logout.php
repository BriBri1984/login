<?php include("functions/init.php");

	//destroys all of the data associated with the current session
	session_destroy();


	if(isset($_COOKIE['email'])) {

		unset($_COOKIE['email']);
		
		setcookie('email', '', time()-86400);


	}


redirect("login.php");




