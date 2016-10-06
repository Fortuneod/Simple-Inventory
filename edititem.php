<?php
	require 'dbclass.php';
	
	if(!empty($_POST['editid']) && !empty($_POST['editwhat']) && !empty($_POST['newvalue'])) {
			
		$editid=$_POST['editid'];
		$editwhat=$_POST['editwhat'];
		$newvalue=$_POST['newvalue'];
		
		
		$newvalue=preg_replace("/[^0-9]/", "", $newvalue);
		
		
		$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$editid'";
		$check=$conn->getData($ch);
		$rn=$conn->Display();
		$rownum=$rn['rownum'];
		
		if($rownum>0) {		
		
		$sql="UPDATE `inventory` SET $editwhat='$newvalue' WHERE itemid='$editid'";
		$run=$conn->Execute($sql);
			
		if($run) {
			
			echo "<h2>Inventory Updated Successfully!</h2>";
		}
		else
			echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";	
		}
		else
			echo "<h2 style='color:red;'>No Match Found For that ID</h2>";	
	}
	else 
		echo "<p style='color:red;'>One or More Fields Left Blank!</p>";			
		
?>