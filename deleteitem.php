<?php
	require 'dbclass.php';
	
	if(!empty($_POST['delid'])) {
			
		$conn->DeleteItem();	
					
	}
	else 
		echo "<p style='color:red;'>Item is  Blank!</p>";			
		
?>
