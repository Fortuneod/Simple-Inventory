<?php
	require 'dbclass.php';
	
	if(!empty($_POST['itemid']) && !empty($_POST['describe']) && !empty($_POST['quantity']) && !empty($_POST['acquired']) && !empty($_POST['span']) && !empty($_POST['depreciate']) && !empty($_POST['money'])) {
	
		
	$tb="CREATE TABLE IF NOT EXISTS `inventory` (
	`id` int(11) not null,
	`itemid` varchar(10) unique not null,
	`description` varchar(100) not null,
	`quantity` varchar(20) not null,
	`acquired` varchar(20) not null,
	`lifespan` varchar(100) not null,
	`depreciate` varchar(10) not null,
	`amount` varchar(100) not null,
	
	PRIMARY KEY (itemid)
	)";
	
	$cr=$conn->Execute($tb);
	
	$conn->NewData();
	
	}
	else
		echo "<p style='color:red;'>One Or More Fields Left Blank</p>";
	
	
?>
	
	
