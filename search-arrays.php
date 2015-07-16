<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Create a function that returns TRUE or FALSE if an array value is found
function isInArray($needle, $haystack) {
	$result = array_search($needle, $haystack);
	if ($result !== false) {
		return TRUE;
	} else {
		return FALSE; 
	}
}

echo isInArray('Bob', $names) . PHP_EOL; // returns as boolean false
echo isInArray('Tina', $names) . PHP_EOL; // returns as boolean true


//Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

function compareArrays($array1, $array2) {
	$totalInCommon = 0;
	foreach($array1 as $array1Value) {
		$result = array_search($array1Value, $array2);
		if ($result !== false) {
			$totalInCommon += 1;
			//return TRUE;
		} else {
			//return FALSE;
		}
	}
	echo $totalInCommon . PHP_EOL; 
	return $totalInCommon;
}
	
compareArrays($names, $compare);


?>