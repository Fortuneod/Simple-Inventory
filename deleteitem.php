<?php
	require 'dbclass.php';
	
	if(!empty($_POST['delid'])) {
			
		$delid=$_POST['delid'];
		
		$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$delid'";
		$check=$conn->getData($ch);
		$rn=$conn->Display();
		$rownum=$rn['rownum'];
		
		if($rownum>0) {		
		
		$sql="DELETE FROM `inventory` WHERE itemid='$delid'";
		$run=$conn->Execute($sql);
			
		if($run) {
			
			echo "<h2>Item Removed Successfully!</h2>";
		}
		else
			echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";				
		}
		else
			echo "<h2 style='color:red;'>No Match Found For that ID</h2>";	
					
	}
	else 
		echo "<p style='color:red;'>Item is  Blank!</p>";			
		
?>