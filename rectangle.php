<?php  

class Rectangle
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->setHeight($height);
		$this->setWidth($width);
	}

	protected function setHeight($height)
	{
		$this->height = $height;
	}

	protected function setWidth($width)
	{
		$this->width = $width;
	}

	public function getHeight()
	{
		return $this->height;
	}

	public function getWidth()
	{
		return $this->width;
	}


	public function area() 
	{	
		$area = $this->height * $this->width;
		return $area;
	}

	public function perimeter() 
	{	
		$perimeter = ($this->height * 2) + ($this->width * 2);
		return $perimeter;
	}

}



?>