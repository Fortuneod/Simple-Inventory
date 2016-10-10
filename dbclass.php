<?php
	
	class MyDB extends SQLITE3
	{
		public $result;
				
		function __construct()
		{
			$this->open("dbfilee.db");
		}
		
				
		function NewData() {
			
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
			
			$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$item'";
			$check=$this->query($ch);
			$nb=$check->fetchArray();
			$count=$nb['rownum'];
	
			if($count>0){
			$itemid=rand(1, 100000);
			}
			else {
				$itemid=$item;
			}
	
			$sql="INSERT INTO `inventory` VALUES('$id', '$itemid', '$describe', '$quantity', '$acquired', '$span', '$depreciate', '$money')";
			$run=$this->exec($sql);
	
			if($run) {
			echo "<p style='color:#fff;font-size:20px;'>Item Added To Inventory Successfully!</p>";
			}
			else
				echo "<p style='color:red;'>Sorry!!! An Error Occurred. Try Again!</p>";
				
		}
		
		function EditItem() {
			$editid=$_POST['editid'];
			$editwhat=$_POST['editwhat'];
			$newvalue=$_POST['newvalue'];
		
		
			$newvalue=preg_replace("/[^0-9]/", "", $newvalue);
		
		
			$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$editid'";
			$check=$this->query($ch);
			$rn=$check->fetchArray();
			$rownum=$rn['rownum'];
		
			if($rownum>0) {		
		
			$sql="UPDATE `inventory` SET $editwhat='$newvalue' WHERE itemid='$editid'";
			$run=$this->exec($sql);
			
			if($run) {
			
			echo "<h2>Inventory Updated Successfully!</h2>";
			}
			else
				echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";	
			}
			else
				echo "<h2 style='color:red;'>No Match Found For that ID</h2>";
		}
		
		function UpdateItem() {
			
			$updid=$_POST['updid'];
			$what=$_POST['what'];
			$updqty=$_POST['updqty'];
			$updvalue=$_POST['updvalue'];
		
			$updvalue=preg_replace("/[^0-9]/", "", $updvalue);
		
			$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$updid'";
			$check=$this->query($ch);
			$rn=$check->fetchArray();
			$rownum=$rn['rownum'];
		
			if($rownum>0){
		
			$first="SELECT * FROM `inventory` WHERE itemid='$updid'";
			$chfirst=$this->query($first);
			$vls=$chfirst->fetchArray();
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
			$run=$this->exec($sql);
			
			if($run) {
			
			echo "<h2>Item Updated Successfully!</h2>";
			}
			else
				echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";				
			}
			else
				echo "<h2 style='color:red;'>No Match Found For that ID</h2>";
		}
		
		
		function View() {
		$ch="SELECT count(*) as rownum FROM `inventory`";
		$rn=$this->query($ch);
		$rw=$rn->fetchArray();
		$size=$rw['rownum'];
		
		if($size>0) {
		
		$sql="SELECT * FROM `inventory` WHERE amount>0 ORDER BY itemid";
		$run=$this->query($sql);
		while($row=$run->fetchArray()) {
			$itemid=$row['itemid'];
			$describe=$row['description'];
			$quantity=$row['quantity'];
			$acquired=$row['acquired'];
			$span=$row['lifespan'];
			$depreciate=$row['depreciate'];
			$amount=$row['amount'];	
			
			$amount=number_format($amount, "2", ".", ",");
	
			echo "<tr>
				<td>$itemid</td>
				<td>$describe</td>
				<td>$quantity</td>
				<td>$acquired</td>
				<td>$span Yrs</td>
				<td>$depreciate%</td>
				<td>N $amount</td>
				</tr>";
	
		}
	}
	else 
		echo "<tr><td colspan=7>There is no Item on the Inventory. Use the Add New Item Button to add an item.</td></tr>";
		
	}
		
		function DeleteItem() {
			$delid=$_POST['delid'];
		
			$ch="SELECT count(*) as rownum FROM `inventory` WHERE itemid='$delid'";
			$check=$this->query($ch);
			$rn=$check->fetchArray();
			$rownum=$rn['rownum'];
		
			if($rownum>0) {		
		
			$sql="DELETE FROM `inventory` WHERE itemid='$delid'";
			$run=$this->exec($sql);
			
			if($run) {
			
			echo "<h2>Item Removed Successfully!</h2>";
			}
			else
				echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";				
			}
			else
				echo "<h2 style='color:red;'>No Match Found For that ID</h2>";
		}
		
		
		function DeleteMore() {
			$ch="SELECT count(*) as rownum FROM `inventory` WHERE amount<=0";
			$check=$this->query($ch);
			$nb=$check->fetchArray();
			$count=$nb['rownum'];
	
			if($count>0) {
					
			$sql="DELETE FROM `inventory` WHERE amount<=0";
			$run=$this-exec($sql);
			
			if($run) {
			
			echo "<h2>Zero Valued Item Removed Successfully!</h2>";
			}
			else
				echo "<h2 style='color:red;'>An Error Occured. Try Again!</h2>";				
			}
			else
				echo "<h2 style='color:red;'>No Zero Valued Item Found!!!</h2>";
		}
		
		
	}
	
	$conn=new MyDB();
	
	
	
		
	
?>
