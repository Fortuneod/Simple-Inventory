<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management System</title>
<meta name="keywords" content="Inventory, Management" />
<meta name="description" content="Simple Inventory Management System" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="images/inventory.png" rel="shortcut icon" type="image/icon" />
<script src="time.js"></script>
<style>
fieldset {border:2px double #F00; border-radius:10px;width:45%;margin:auto;}
legend {text-align:center;font-size:24px;color:#fff;font-weight:bold;text-shadow:2px 2px #000;}
table {font-size:20px;}
input[type=text], input[type=password] {height:30px;width:250px;border:1px solid #F00;border-radius:5px;}
input[type=text]:focus, input[type=password]:focus {outline:none;}
input[type=submit] {background:#3C0;color:#fff;font-size:24px;font-weight:bold;text-shadow:1px 1px #000;border-radius:10px;width:100%;height:45px;}
</style>
</head>
<body>
<div id="container">
	<div id="banner">
    	<div id="logo"></div>
        
         </div> <!-- end of banner -->
    
    <div id="content_wrapper">
    	<div id="content_index">    	
        
        <div class="column_w430 fl vl_divider" style="min-height:425px;">
        	
         <div class="header_01" align="center" style="font-size:32px;">PLEASE LOGIN</div>
       <fieldset>
       <form action="Login.php" method="post" enctype="multipart/form-data">
       <table border=0 cellpadding=5 cellspacing=5>
       <tr>
       <td>Username: </td>
       <td><input type="text" name="username" required/></td>
       </tr>
       <tr>
       <td>Password: </td>
       <td><input type="password" name="password" required/></td>
       </tr>
       <tr>
       <td colspan="2" align="center"><input type="submit" value="Login" /></td>
       </tr>
       </table>
       </form>
       </fieldset>
	
		         
        	<div class="cleaner"></div>        
        </div> <!-- end of a column -->
    <div class="margin_bottom_20"></div>
        
        
    
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
    
    <div id="footer">
    
          
        <div class="margin_bottom_10"></div>
        
        Copyright &copy; <span id="year"></span>
   	</div> <!-- end of footer -->
</div> <!-- end of container -->
</body>
</html>