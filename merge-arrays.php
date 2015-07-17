<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Jordan', 'Matt'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Jordan', 'Ben'];

//Write a function called combine_arrays() that will take in two array values and return a new array with values from both.
// use a combination of array_shift() & array_push() or array_pop() & array_unshift().

function combine_arrays($array1, $array2) {
	$combinedArray = [];
	foreach ($array1 as $array1Value) {
		$array2Value = array_shift($array2);
		array_push($combinedArray, $array1Value);
		
		if ($array1Value !== $array2Value) {
			array_push($combinedArray, $array2Value);
		}
	}
	return $combinedArray;	
}

print_r(combine_arrays($names, $compare));

?>