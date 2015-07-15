<?php

$x = 2;
$y = 1;

$a = 5;
$b = 10;

//Error checking
function errorCheck($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
	} else {
		return "ERROR: Both arguments must be numbers. Yours were: $a and $b. Please revise." . PHP_EOL; 
	}
}


//Addition function - checks for numbers
function add($a, $b){
	errorCheck($a, $b);
    return $a + $b;
}


//Subtraction function - checks for numbers
function subtract($a, $b){
	errorCheck($a, $b);
	return $a - $b;
}

//Multiplication function - checks for numbers
function multiply($a, $b){
	errorCheck($a, $b);
	return $a * $b; 
}



//Division function - checks for numbers
function divide($a, $b){
	errorCheck($a, $b);
	if ($a == 0 || $b == 0) {
		return "ERROR: Cannot divide by 0. Your inputs were: $a and $b. Please revise." . PHP_EOL; 
	} else {
    	return $a / $b;
	}
}


//Modulus function - checks for numbers
function modulus($a, $b){
	errorCheck($a, $b);
	return $a % $b;
}



//Testing down here
echo add($x, $y) . PHP_EOL;
echo add(6, 4) . PHP_EOL;
echo add($b, 3) . PHP_EOL;
echo add('b', 3) . PHP_EOL;
echo add('two', 3) . PHP_EOL;
echo add(6, 4) + add(1, 1) . PHP_EOL;

echo subtract($x, $y) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo subtract($a, $y) . PHP_EOL;

echo multiply($x, $y) . PHP_EOL;
echo multiply(6, 4) . PHP_EOL;
echo multiply('R', 4) . PHP_EOL;

echo divide($x, $y) . PHP_EOL;
echo divide(6, 4) . PHP_EOL;
echo divide(5, 0) . PHP_EOL;
echo divide(0, 1) . PHP_EOL;
echo divide(7, 'hey') . PHP_EOL;
echo divide('', '') . PHP_EOL;

echo modulus($x, $y) . PHP_EOL;
echo modulus(6, 4) . PHP_EOL;
echo modulus(0, 10) . PHP_EOL;


?>