<?php
	
	class Model
	{
		public $home;
		public $newform;
		public $update;
		public $delete;
		public $viewtop;
		public $viewbottom;
		
		public function __construct() 
		{
			$year=date('Y');

			$this->home = <<<EOD
<div id="container">
	<div id="banner">
    	<div id="logo"></div>
        
         </div> <!-- end of banner -->
    
    <div id="menu">
        <ul>
            <li><button id="btnhome" onClick="HomeView();">Home</button></li>
            <li><button id="btnnew" onClick="newItem();">Add New Item</button> </li>
            <li><button id="btnupdate" onClick="UpdView();">Update Item(s)</button> </li>
            <li><button id="btnview" onClick="InvView();">View Inventory</button> </li>
            <li><button id="btndelete" onClick="DelView();">Delete Item(s)</button> </li>
            <li><a href="Logout.php"><button id="last">Logout</button></a></li>
            
        </ul>   
	</div> <!-- end of menu -->

	<div id="content_wrapper">
    	<div id="content">
       <div class="column_w430 fl vl_divider">
<div class="header_01">Welcome User!!!</div>
            
<p>This program is designed to assist you in managing your assets or stock. It is very easy to use. Simply Select your desired option from the menu above.</p>

</div> <!-- end of a column -->
        
       
        
        
        <div class="margin_bottom_20"></div>
        
        
    
    	<div class="cleaner"></div>
	</div> <!-- end of wrapper 02 -->        
    </div> <!-- end of wrapper 01 -->
    
    <div id="footer">
    
          
        <div class="margin_bottom_10"></div>
        
        Copyright &copy; $year
   	</div> <!-- end of footer -->
</div> <!-- end of container -->

EOD;
			
			$rand=rand(1, 100000);	
			$this->newform = <<<EOD
<div class="header_01">REGISTER NEW ITEM</div>
	<form>
	<table border=0 cellspacing=5 cellpadding=5>
	<tr>
	<td>Item ID:</td>
	<td><input type="text" name="itemid" id="itemid" value="$rand"  readonly /></td>
	</tr>
	<tr>
	<td>Description: </td>
	<td><input type="text" size="50" name="describe" id="describe" />
	</tr>
	<tr>
	<td>Quantity: </td>
	<td><input type="text" name="quantity" id="quantity" />
	</tr>
	<tr>
	<td>Date Acquired: </td>
	<td><input type="date" name="acquired" id="acquired" />
	</tr>
	<tr>
	<td>Life Span (Years): </td>
	<td><input type="text" name="span" id="span" />
	</tr>
	<tr>
	<td>% of Depreciation: </td>
	<td><input type="text" name="depreciate" id="depreciate" />
	</tr>
	<tr>
	<td>Monetary Value: </td>
	<td><input type="text" size="17" name="money" id="money" />
	</tr>
	<tr>
	<td colspan=2 align="center"><input type="button" value="Add to Inventory"onClick="registerNew();"/>
	</tr>
	</table>
	</form>
EOD;

		$this->update = <<<EOD
	<div class="header_01">UPDATE INVENTORY</div>
	
	<fieldset style="width:90%;"><legend>ADD/REMOVE QUANTITY</legend>
	<form>
	<table border=0 cellspacing=5 cellpadding=5>
	<tr>
	<td>Item ID: </td>
	<td><input type="text" name="updid" id="updid" /></td>
	<td>Do What?: </td>
	<td><select name="what" id="what"><option value="">-Choose-</option><option>Add</option><option>Remove</option></select>
	</td>
	</tr>
	<tr>
	<td>Quantity: </td>
	<td><input type="text" name="updqty" id="updqty" /></td>
	<td>Value: </td>
	<td><input type="text" name="updvalue" id="updvalue" /></td>
	</tr>
	<td colspan=4 align="center"><input type="button" value="Update Inventory" onClick="UpdateInv();" /></td>
	</tr>
	</table>
	</form>
	</fieldset><br>
	
	<fieldset style="width:90%;"><legend>EDIT INFO</legend>
	<form>
	<table border=0 cellspacing=5 cellpadding=5>
	<tr>
	<td>Item ID: </td>
	<td><input type="text" name="editid" id="editid" /></td>
	<td>Edit What?: </td>
	<td><select name="editwhat" id="editwhat"><option value="">-Choose-</option><option value="lifespan">Life Span</option><option value="depreciate">% of Depreciation</option><option value="amount">Value</option></select>
	</td>
	</tr>
	<tr>
	<td>New Value: </td>
	<td><input type="text" name="newvalue" id="newvalue" /></td>
	</tr>
	<td colspan=4 align="center"><input type="button" value="Update Item" onClick="UpdateItem();" /></td>
	</tr>
	</table>
	</form>
	</fieldset>
	
EOD;

	$this->viewtop = <<<EOD
	<p>To refresh the list, click the View Inventory Button Again.</p>
<div id="tablearea" style="width:96%;margin:auto;overflow-x:auto;padding:25px 10px;">
<table border=1 cellspacing=5 cellpadding=5 style="border-collapse:collapse; width:120%; margin:auto;">
	<tr style="background:#fff;color:#000;">
	<th>Item ID</th>
	<th width="30%">Description</th>
	<th>Qtty</th>
	<th width="15%">Date Acquired</th>
	<th>Life Span</th>
	<th>% of Depr</th>
	<th width="20%">Monetary Value</th>
	</tr>
EOD;

	$this->viewbottom = <<<EOD
	</table>
	</div>
EOD;

	$this->delete = <<<EOD
	<div class="header_01">DELETE FROM INVENTORY</div>
	
	<fieldset style="width:90%;"><legend>DELETE SINGLE ITEM</legend>
	<form>
	<table border=0 cellspacing=5 cellpadding=5>
	<tr>
	<td>Item ID: </td>
	<td><input type="text" name="delid" id="delid" /></td>
	<td><input type="button" value="Delete Item" onClick="DeleteSn();" /></td>
	</tr>
	</table>
	</form>
	</fieldset><br>
	
	<fieldset style="width:90%;"><legend>DELETE ALL ZERO VALUES</legend>
	<form>
	<table border=0 cellspacing=5 cellpadding=5>
	<tr>
	<td>Click the Button to Delete all items with Zero(0) Value </td>
	<td><input type="button" value="Delete" onClick="DeleteMult();" /></td>
	</tr>
	</table>
	</form>
	</fieldset>
	
EOD;
			
		}
		
	}
	
	class Controller
	{
		private $model;
		
		public function __construct($model)
		{
			$this->model = $model;
		}
	}
	
	class View 
	{
		private $model;
		private $controller;
				
		public function __construct($controller, $model)
		{
			$this->controller = $controller;
			$this->model = $model;
		}
		
		public function homeContent() 
		{
			return $this->model->home;
			
		}
		
		public function newContent() 
		{
			return $this->model->newform;
			
		}
		
		public function updateContent() 
		{
			return $this->model->update;
			
		}
		
		public function deleteContent() 
		{
			return $this->model->delete;
			
		}
		
		public function viewContentTop() 
		{
			return $this->model->viewtop;
			
		}
		
		public function viewContentBottom() 
		{
			return $this->model->viewbottom;
			
		}
		
	}
	
	
	
	
?>
