<?php  

require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(2, 3);
echo 'Rectangle area is:' . $rectangle->area() . PHP_EOL;
//echo 'Rectangle perimeter is:' . $rectangle->perimeter() . PHP_EOL;


$square = new Square(2);
echo 'Square area is:' . $square->area() . PHP_EOL;
//echo 'Square perimeter is:' . $square->perimeter() . PHP_EOL;

?>