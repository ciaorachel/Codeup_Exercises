<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//Create a function that returns TRUE or FALSE if an array value is found
function isinArray($needle, $haystack){
	$result = array_search($needle, $haystack);
	if ($result !== false) {
		return true;
	} else {
		return false; 
	}
}

var_dump(isinArray('Bob', $names));
var_dump(isinArray('Tina', $names));

?>