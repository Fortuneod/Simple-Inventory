<?php
	
	//Declare Default Username and Password
	$username="Admin";
	$password="admin123";
	
	//Get Input From Login Form
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	
	//Check For Correct Username
	if($user==$username) {
		
		//If Username is Correct, check for Correct Password
		if($pass==$password) {
		
		//If both are correct, start a session variable which we will use to transfer info to the main application page.
			session_start();
		//Give the session a name	
			$_SESSION['invent']=$username;
		//Redirect to the Main Application page
			header('location: MainPage.php');
			exit;			
		}
		//This will show as a JavaScript alert if Password is wrong
		else
			echo "<script>
				alert('Wrong Password Entered!!!');
				window.location.href='./';
				</script>";
	}
	//This will show as a JavaScript alert if Username is wrong 
	else
		echo "<script> //open a script tag
				alert('Wrong Username Entered!!!'); //specify the alert text
				window.location.href='./'; //redirect to the index page
				</script>"; //Close the script

?>