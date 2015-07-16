<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Write a function called combine_arrays() that will take in two array values and return a new array with values from both.
// use a combination of array_shift() & array_push() or array_pop() & array_unshift().

function combine_arrays($names, $compare) {
	$combinedArray = [];
	foreach ($names as $nameValue) {
		$compareValue = array_shift($compare);
		if ($nameValue == $compareValue) {
			array_push($combinedArray, $nameValue);
		}
		if ($nameValue !== $compareValue) {
			array_push($combinedArray, $nameValue);
			array_push($combinedArray, $compareValue);
		}
	}
	print_r($combinedArray);	
}

combine_arrays($names, $compare);

?>