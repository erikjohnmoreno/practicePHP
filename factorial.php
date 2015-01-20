<?php 

	
	class ClassName 
	{
		
		function factorial($number) { 
	 		
	 		global $a;
		    if ($number < 2) { 
		        return 1; 
		    } else { 

		        return ($number * $a->factorial($number-1)); 
		    } 
		}
	}

	
$a = new ClassName();


echo $a->factorial(4);

 ?>