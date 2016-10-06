<?php
	
	class MyDB extends SQLITE3
	{
		public $result;
				
		function __construct()
		{
			$this->open("dbfile.db");
		}
		
		function Execute($conn) 
		{
			return $this->exec($conn);
		}
		
		function getData($conn) 
		{	
			$this->result = $this->query($conn);
			return $this->result !== false;
			
		}
		
		function Display()
		{
			return $this->result->fetchArray(SQLITE3_ASSOC);
		}
	}
	
	$conn=new MyDB();
	
?>