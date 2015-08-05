<?php  

//Example - parent Person class:
/*class Person
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

//example - child Superhero class:
class Superhero extends Person
{
    public $pseudonym;
    public $capeColor;

    public function alterEgo()
    {
        return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }
}*/

//procedural for instantiating regular person:
/*$person = new Person('John', 'Doe');
*///echo $person->fullName() . PHP_EOL; // "John Doe"

//procedural for instantiating a new superhero:
/*$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';*/

//echo $superman->alterEgo() . PHP_EOL;



class Rectangle
{
	public $height;
	public $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area() 
	{	
		$area = $this->height * $this->width;
		return $area;
	}

}



?>