<?php

$x = 2;
$y = 1;

$a = 5;
$b = 10;

//Addition function - checks for numbers
function add($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
    	return $a + $b;
	} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL; 
	}
}
echo add($x, $y) . PHP_EOL;
echo add(6, 4) . PHP_EOL;
echo add($b, 3) . PHP_EOL;


//Subtraction function - checks for numbers
function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
    	return $a - $b;
    } else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL; 
	}
}
echo subtract($x, $y) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;
echo subtract($a, $y) . PHP_EOL;


//Multiplication function - checks for numbers
function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
    	return $a * $b; 
    } else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL; 
	}
}
echo multiply($x, $y) . PHP_EOL;
echo multiply(6, 4) . PHP_EOL;


//Division function - checks for numbers
function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
    	return $a / $b;
} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL; 
	}
}
echo divide($x, $y) . PHP_EOL;
echo divide(6, 4) . PHP_EOL;


//Modulus function - checks for numbers
function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
		return $a % $b;
} else {
		return "ERROR: Both arguments must be numbers" . PHP_EOL; 
	}
}
echo modulus($x, $y) . PHP_EOL;
echo modulus(6, 4) . PHP_EOL;