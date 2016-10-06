<?php
	
	$body = <<<EOD
	<div class="header_01">DELETE FROM INVENTORY</div>
	
	<p>Are you sure you want to delete all items with Zero(0) value from the inventory? </p><br>
	<p style="text-align:center;"><input type="button" value="    Yes    " onClick="DeleteMore();" /> &nbsp;&nbsp;&nbsp;<input type="button" value="    No    " onClick="HomeView();" /></p>
	
EOD;

	echo $body;
	
?>