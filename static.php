<?php 
	/**
	* 
	*/
	class ClassName
	{
		public $property;
		

		function hey($name)
		{	
			echo $this->heyhey(14);
			return $this->property = $name;

		}

		static function heyhey($age)
		{
			return $age;
		}
	}

	$relax = new ClassName;
	echo $relax->hey("dan");


 ?>