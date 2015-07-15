<?php

$x = 2;
$y = 1;

function add($a, $b)
{
    return $a + $b;
}

echo add($x, $y) . PHP_EOL;
echo add(3, 4) . PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}
echo subtract($x, $y) . PHP_EOL;
echo subtract(3, 4) . PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}
echo multiply($x, $y) . PHP_EOL;
echo multiply(3, 4) . PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}
echo divide($x, $y) . PHP_EOL;
echo divide(3, 4) . PHP_EOL;

// Add code to test your functions here
