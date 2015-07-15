<?php

$x = 2;
$y = 1;

function add($a, $b)
{
    return $a + $b;
}

echo add($x, $y) . PHP_EOL;
echo add(6, 4) . PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}
echo subtract($x, $y) . PHP_EOL;
echo subtract(6, 4) . PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}
echo multiply($x, $y) . PHP_EOL;
echo multiply(6, 4) . PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}
echo divide($x, $y) . PHP_EOL;
echo divide(6, 4) . PHP_EOL;

function modulus($a, $b)
{
	return $a % $b;
}
echo modulus($x, $y) . PHP_EOL;
echo modulus(6, 4) . PHP_EOL;