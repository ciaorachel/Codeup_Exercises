<?php  

// pull all multiples of 3
// pull all multiples of 5
// sum up all multiples of 3 and 5 below 1000


$d = 0;

for ($a = 1; $a < 1000; $a++) {
	$b = 3;
	$c = 5;

	if ($a % $c == 0 || $a % $b == 0) {
		$d += $a;
	} 
	
}
echo $d . PHP_EOL;


$sum = 0;

for ($e = 1; $e < 1000; $e++) {

	if ($e % 5 == 0 || $e % 3 == 0) {
		$sum += $e;
	} 
	
}
echo $d . PHP_EOL;

?>