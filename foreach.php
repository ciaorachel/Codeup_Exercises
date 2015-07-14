<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $thing) {
	if (is_array($thing)) {
		echo implode (', ', $thing) . PHP_EOL;
		}
	else {
		echo "{$thing}\n";
}
}


/*
foreach ($things as $key => $thing) {
    echo "The thing at index $key is $thing\n";
}


// Evaluates data type of each element
foreach($things as $thing) {
	if (is_int($thing)) {
		echo "Integer\n";
	} elseif (is_float($thing)) {
		echo "Float\n";
	} elseif (is_bool($thing)) {
		echo "Boolean\n";
	} elseif (is_array($thing)) {
		echo "Array\n";
	} elseif (is_null($thing)) {
		echo "Null\n";
	} elseif (is_string($thing)) {
		echo "String\n";
	} else {
		echo "{$thing} is none of the above\n";
	}
}

// Evaluates whether each is scalar
foreach($things as $thing) {
	if (is_scalar($thing)) {
		echo "{$thing} is a scalar\n";
	} else {
		echo "{$thing} is not a scalar\n";
	}
}
*/



?>