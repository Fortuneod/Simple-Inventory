<?php
	//Indicate that a Session was started before
	session_start();
	//Kill the Session
	unset($_SESSION['invent']);
	//Redirect to the Index Page
	header('location: ./');
	exit;
	
?>