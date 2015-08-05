<?php 

/*require_once 'rectangle.php';


class Square extends Rectangle
{	
	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function perimeter() 
	{	
		$perimeter = ($this->height * 2) + ($this->width * 2);
		return $perimeter;
	}

}*/

class Square
{	
	public function __construct($length)
	{
		$this->length = $length;
	}

	public function perimeter() 
	{	
		$perimeter = ($this->length * 4);
		return $perimeter;
	}

}


?>