<?php  


class Model
{
	private $attributes = array();
	protected static $table;

	public function __set($key, $value) 
	{
		$this->attributes[$key] = $value;
	}

	public function __get($key) 
	{
		if (array_key_exists($key, $this->attributes)) {
			return $this->attributes[$key];
		}
		return null;
	}

	public static function getTableName()
	{
		return static::$table;	
	}
}

$parkOne = new Model();
$parkOne->name = 'Arches';
$parkOne->state = 'UT';
$parkOne->area = 76518;
$parkOne->color = 'reddish';

$parkTwo = new Model();
$parkTwo->name = 'Big Bend';
$parkTwo->state = 'TX';
$parkTwo->area = 123431;

$parkThree = new Model();
$parkThree->name = 'Everglades';
$parkThree->weather = 'rainy';


echo $parkOne->name . PHP_EOL;
echo $parkTwo->name . PHP_EOL;
echo $parkOne->color . PHP_EOL;
echo $parkOne->weather . PHP_EOL; // returns as null b/c no weather key/value in $parkOne

echo $parkOne->state . PHP_EOL;
echo $parkTwo->state . PHP_EOL;
echo $parkTwo->color . PHP_EOL; // returns as null b/c no color key/value in $parkTwo

echo $parkThree->name . PHP_EOL;
echo $parkThree->state . PHP_EOL; // returns as null b/c no state key/value in $parkThree
echo $parkThree->weather . PHP_EOL;



//CLASS NOTES:
// class Superhero 
// {
// 	private $superPowers = array();

// 	public function __set($key, $value) //__get always takes 2 params
// 	{
// 		$this->superPowers[$key] = $value;
// 	}

// 	public function __get($key) //__get always takes 1 param
// 	{
// 		if (array_key_exists($key, $this->superPowers)) {
// 			return $this->superPowers['key'];
// 		}
// 		return false;
// 	}

// }

// $theBat = new Superhero('Ben', 'Affleck', 'Batman');
// $theBat->flight = false;

// if ($theBat->flight){
// 	echo "he flies" . PHP_EOL;
// } else {
// 	echo "no he doesnt" . PHP_EOL;
// }


/*
//For national_parks db we'll be refactoring. here's a sneak peek!
$id = 1;

$park = NationalPark::find($id);

echo $park->name;
echo $park->state;
*/
?>