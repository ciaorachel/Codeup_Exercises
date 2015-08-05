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
		$area = $this->height * 4;
		return $area;
	}

	public function perimeter() 
	{	
		$perimeter = $this->height * 4;
		return $perimeter;
	}

}


?>