<?php
	require 'pageClass.php';
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	$contentTop=$view->viewContentTop();
	$contentBottom=$view->viewContentBottom();
	
	echo $contentTop;

	$dbfile="dbfile.db";
	
	if(!file_exists($dbfile) || 0!==filesize($dbfile)) {
		require 'dbclass.php';		
		
		$ch="SELECT count(*) as rownum FROM `inventory`";
		$rn=$conn->getData($ch);
		$rw=$conn->Display();
		$size=$rw['rownum'];
		
		if($size>0) {
		
		$sql="SELECT * FROM `inventory` WHERE amount>0 ORDER BY itemid";
		$run=$conn->getData($sql);
		while($row=$conn->Display()) {
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
	else 
		echo "<tr><td colspan=7>There is no Item on the Inventory. Use the Add New Item Button to add an item.</td></tr>";

	echo $contentBottom;
?>
