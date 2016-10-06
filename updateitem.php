<?php
	require 'dbclass.php';
	
	if(!empty($_POST['updid']) && !empty($_POST['what']) && !empty($_POST['updqty']) &&!empty($_POST['updvalue'])) {
			
		$updid=$_POST['updid'];
		$what=$_POST['what'];
		$updqty=$_POST['updqty'];
		$updvalue=$_POST['updvalue'];
		
		$updvalue=preg_replace("/[^0-9]/", "", $updvalue);
		
		$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$updid'";
		$check=$conn->getData($ch);
		$rn=$conn->Display();
		$rownum=$rn['rownum'];
		
		if($rownum>0){
		
		$first="SELECT * FROM `inventory` WHERE itemid='$updid'";
		$chfirst=$conn->getData($first);
		$vls=$conn->Display();
		$qty=$vls['quantity'];
		$amt=$vls['amount'];
		
		if($what=="Add") {
			$newqty=$qty + $updqty;
			$newamt=$amt + $updvalue;
		}
		
		if($what=="Remove") {
			$newqty=$qty - $updqty;
			$newamt=$amt - $updvalue;
		}
				
		$sql="UPDATE `inventory` SET quantity='$newqty', amount='$newamt' WHERE itemid='$updid'";
		$run=$conn->Execute($sql);
			
		if($run) {
			
			echo "<h2>Item Updated Successfully!</h2>";
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