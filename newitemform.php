<?php
	
	require 'pageClass.php';
	
	$model = new Model();
	$controller = new Controller($model);
	$view = new View($controller, $model);
	$content=$view->newContent();
		
	
	echo $content;

?>