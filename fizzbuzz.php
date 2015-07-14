<?php  

for ($a = 1; $a <= 100; $a++) {
    $fizz = 3;
    $buzz = 5;
    if ($a % $fizz == 0 && $a % $buzz == 0) {
    	echo "FizzBuzz\n";
    } elseif ($a % $fizz == 0) {
    	echo "Fizz\n";
    } elseif ($a % $buzz == 0) {
    	echo "Buzz\n";
    }else {
    	echo "{$a}\n";
    }
}

?>