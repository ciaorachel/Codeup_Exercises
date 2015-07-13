<?php 

$test = 5;

while ($test <= 15) {
	echo "{$test}\n";
	$test++;
}


$a = 5;
while ($a <= 15) {
	if ($a % 4 == 0) {
		echo "$a is divisible by 4 and 2\n";
	} elseif ($a % 2 == 0) {
		echo "$a is divisible by 2\n";
	} else {
		echo "{$a}\n";
	}

	$a++;
}

$b = 5;
$firstCondition = 3;
$secondCondition = 2;
while ($b <= 15) {
	if ($b % $firstCondition == 0 && $b % $secondCondition) {
		echo "$b is divisible by {$firstCondition} and {$secondCondition}\n";
	} elseif ($b % $firstCondition == 0) {
		echo "$b is divisible by {$firstCondition}\n";
	} elseif ($b % $secondCondition == 0) {
		echo "$b is divisible by {$secondCondition}\n";
	} else {
		echo "{$b}\n";
	}

	$b++;
}

?>