<?php

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';


//Convert the string into an array
$physicistsArray = explode(', ', $physicistsString);
print_r($physicistsArray) . PHP_EOL;

//Create the $famousFakePhysicists string that lists the physicists and contains the "and" at the end.
//$arrayname[indexname] = $value;

function insertAndConvert ($string1, $array1) {
	$lastItem = array_pop($array1);
	array_push($array1, $string1);
	array_push($array1, $lastItem);
	return $array1;
}
print_r(insertAndConvert('and', $physicistsArray));

foreach($array1 as $array1Value) {
	if ($array1Value != 'and')
		implode(', ', $array1);
}


	//$famousFakePhysicists = implode(', ', $physicistsArray);
	//print_r($famousFakePhysicists) . PHP_EOL;


//echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

// Converts array into list n1, n2, ..., and n3
//function humanizedList($array) {
// Your solution goes here!
//}

// Humanize that list
//$famousFakePhysicists = humanizedList($physicistsArray);

// Output sentence
//echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";

 ?>