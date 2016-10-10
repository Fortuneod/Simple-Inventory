<?php
	require 'dbclass.php';
	
	if(!empty($_POST['editid']) && !empty($_POST['editwhat']) && !empty($_POST['newvalue'])) {
			
		$conn->EditItem();	
	}
	else 
		echo "<p style='color:red;'>One or More Fields Left Blank!</p>";			
		
?>
