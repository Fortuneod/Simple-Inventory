<?php
	require 'dbclass.php';
	
	if(!empty($_POST['itemid']) && !empty($_POST['describe']) && !empty($_POST['quantity']) && !empty($_POST['acquired']) && !empty($_POST['span']) && !empty($_POST['depreciate']) && !empty($_POST['money'])) {
	
	$id=rand(1, 100000);
	$item=$_POST['itemid'];
	$describe=$_POST['describe'];
	$quantity=$_POST['quantity'];
	$acquired=$_POST['acquired'];
	$span=$_POST['span'];
	$depreciate=$_POST['depreciate'];
	$money=$_POST['money'];
	
	$money=preg_replace("/[^0-9]/", "", $money);
	$span=preg_replace("/[^0-9]/", "", $span);
	$depreciate=preg_replace("/[^0-9]/", "", $depreciate);
	
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
	
	$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$item'";
	$check=$conn->getData($ch);
	$nb=$conn->Display();
	$count=$nb['rownum'];
	
	if($count>0){
		$itemid=rand(1, 100000);
	}
	else {
		$itemid=$item;
	}
	
	$sql="INSERT INTO `inventory` VALUES('$id', '$itemid', '$describe', '$quantity', '$acquired', '$span', '$depreciate', '$money')";
	$run=$conn->Execute($sql);
	
	if($run) {
		echo "<p style='color:#fff;font-size:20px;'>Item Added To Inventory Successfully!</p>";
	}
	else
		echo "<p style='color:red;'>Sorry!!! An Error Occurred. Try Again!</p>";
	}
	else
		echo "<p style='color:red;'>One Or More Fields Left Blank</p>";
	
?>
	
	