<?php 
	/**
	* 
	*/
	class Courier
	{
		protected $data = array();

		public function __get($property)
		{
			return $this->data[$property];
		}

		public function __set($property,$value)
		{
			$this->data[$property] = $value;
			return true;
		}	
	}

	$courier = new Courier();
	$courier->woah = 'Avian Carrier';
	echo $courier->woah;
 ?>