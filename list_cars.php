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
		echo "I own a " . $carDetails['year'] . " $car. Details below:" . PHP_EOL;
		echo "------------------------------" . PHP_EOL;
		echo $carDetails['doors'] . "-door " . $carDetails['year'] . " $car" . PHP_EOL;
		echo "Color: " . $carDetails['color'] . PHP_EOL;
		echo "Mileage: " . $carDetails['mileage'] . PHP_EOL;
		echo "Sunroof: ";
		echo trueOrFalse($carDetails['sunroof']) . PHP_EOL;
		echo "Convertible: ";
		echo trueOrFalse($carDetails['convertible']) . PHP_EOL;
		echo "License No.: " . $carDetails['license'] . PHP_EOL;
		echo PHP_EOL;
	}
}

function trueOrFalse ($carDetails) {
	if ($carDetails == true) {
		echo "yes";
	} else {
		echo "N/A";
	}
}


print_r(list_cars($cars)) . PHP_EOL;


?>