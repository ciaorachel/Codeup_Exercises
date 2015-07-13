<?php  
//example 1:
$i = 2;

do {
	echo "Howdy" . PHP_EOL;
	$i += 1;
} while ($i == 2);

//example 2:
$a = 0;
do {
	echo "{$a}\n";
	$a += 2;
} while ($a <= 100);

//example 3:
$b = 100;
do {
	echo "{$b}\n";
	$b -= 5;
} while ($b >= -10);

//example 4:
$c = 2;
do {
	echo "$c\n";
	$c = $c * $c;
} while ($c <= 1000000);

//example 5:
$d = 2;
do {
	echo "$d\n";
	$d *= $d;
} while ($d <= 1000000);

?>