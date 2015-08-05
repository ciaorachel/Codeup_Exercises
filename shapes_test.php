<?php  

require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(2, 3);
echo 'Rectangle area is:' . $rectangle->area() . PHP_EOL;

/*
//This is my echo for Square class that extends Rectangle, however, we've refactored this for improved usage.
$square = new Square(2, 2);
echo 'Square area is:' . $square->area() . PHP_EOL;
echo 'Square perimeter is:' . $square->perimeter() . PHP_EOL;
*/

$square2 = new Square(2);
echo 'Square perimeter is:' . $square2->perimeter() . PHP_EOL;

?>