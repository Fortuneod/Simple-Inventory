<?php
	
	require 'pageClass.php';
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	$content=$view->deleteContent();
		
	
	echo $content;

?>