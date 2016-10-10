<?php
	require 'pageClass.php';
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	$contentTop=$view->viewContentTop();
	$contentBottom=$view->viewContentBottom();
	
	echo $contentTop;

	$dbfile="dbfilee.db";
	
	if(!file_exists($dbfile) || 0!==filesize($dbfile)) {
		require 'dbclass.php';		
		
		$conn->View();
	}
	else 
		echo "<tr><td colspan=7>There is no Item on the Inventory. Use the Add New Item Button to add an item.</td></tr>";

	echo $contentBottom;
?>
