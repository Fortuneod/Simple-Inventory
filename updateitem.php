<?php
	require 'dbclass.php';
	
	if(!empty($_POST['updid']) && !empty($_POST['what']) && !empty($_POST['updqty']) &&!empty($_POST['updvalue'])) {
			
		$conn->UpdateItem();	
	}
	else 
		echo "<p style='color:red;'>One or More Fields Left Blank!</p>";			
		
?>
