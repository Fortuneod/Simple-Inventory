<?php
	//Indicate that a session was started
	session_start();
	//Check if the session is active or not
	if(isset($_SESSION['invent'])) {
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management System</title>
<meta name="keywords" content="Inventory, Management" />
<meta name="description" content="Simple Inventory Management System" />
<link href="images/inventory.png" rel="shortcut icon" type="image/icon" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="jquery.js" type="application/javascript"></script>
<script src="ajaxcontrol.js" type="application/javascript"></script>
<script src="time.js" type="application/javascript"></script>
</head>
<body onLoad="HomeView();" >
<!--The onLoad Event will display the default page contents as soon as the page loads.-->   
		          
        
</body>
</html>
<?php
	}
	//This will display a JavaScript alert is the session is not active
	else
		echo "<script>
				alert('DENIED!!! LOGIN FIRST!');
				window.location.href='./';
				</script>";
?>