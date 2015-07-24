<?php  

$cars = array(
    'Toyota Solara' => array(
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertible' => false,
        'license' => 'JSRULZ',
    ),

    'Honda Odyssey' => array(
        'year' => 2004, 
        'doors' => 4,
        'color' => 'maroon',
        'mileage' => 60000,
        'sunroof' => false,
        'convertible' => false,
        'license' => 'ILUVPHP',
    ),

    'Cadillac Escalade' => array(
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertible' => false,
        'license' => 'HTML5',
    ),

);



function list_cars ($cars) {
	foreach ($cars as $car => $carDetails) {
		print_r("I own a " . $carDetails['year'] . " $car. Details below:" . PHP_EOL);
		print_r("------------------------------" . PHP_EOL);
		print_r($carDetails['doors'] . "-door " . $carDetails['year'] . " $car" . PHP_EOL);
		print_r("Color: " . $carDetails['color'] . PHP_EOL);
		print_r("Mileage: " . $carDetails['mileage'] . PHP_EOL);
		print_r("Sunroof: " . trueOrFalse($carDetails['sunroof']) . PHP_EOL);
		print_r("Convertible: " . trueOrFalse($carDetails['convertible']) . PHP_EOL);
		print_r("License No.: " . $carDetails['license'] . PHP_EOL);
		print_r(PHP_EOL);
	}
}

function trueOrFalse ($carDetails) {
	if ($carDetails === true) {
		return "yes";
	} else {
		return "N/A";
	}
}


//print_r(list_cars($cars)) . PHP_EOL;

function addCars ($newCar) {
	$newCar = 'Fiat 500' => array(
		'year' => 2010
		'doors' => 2,
        'color' => 'blue',
        'mileage' => 25000,
        'sunroof' => false,
        'convertible' => true,
        'license' => 'PHP4LYFE',
        );
	array_push($car, $newCar);
	print_r(list_cars($cars)) . PHP_EOL;
}

print_r(addCars($newCar) . PHP_EOL);

?>