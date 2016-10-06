<?php
	require 'dbclass.php';	
	
	$ch="SELECT count(*) as rownum FROM `inventory` WHERE amount<=0";
	$check=$conn->getData($ch);
	$nb=$conn->Display();
	$count=$nb['rownum'];
	
	if($count>0) {
					
		$sql="DELETE FROM `inventory` WHERE amount<=0";
		$run=$conn->Execute($sql);
			
		if($run) {
			
			echo "<h2>Zero Valued Item Removed Successfully!</h2>";
		}
		else
			echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";				
	}
	else
		echo "<h2 style='color:red;'>No Zero Valued Item Found!!!</h2>";		
?>