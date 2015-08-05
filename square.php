<?php 

require_once 'rectangle.php';


class Square extends Rectangle
{	
	public function __construct($height)
	{
		parent::__construct($height, $height);
	}

	public function area()
	{
		$area = $this->height * $this->height;
		return $area;
	}

	public function perimeter() 
	{	
		$perimeter = ($this->height * 2) + ($this->height * 2);
		return $perimeter;
	}

}


?>