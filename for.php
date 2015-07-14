<?php  

fwrite(STDOUT, 'Key in a starting number, then hit Enter ');
$b = trim(fgets(STDIN));

fwrite(STDOUT, 'Now pick the ending number and hit Enter ');
$c = trim(fgets(STDIN));

fwrite(STDOUT, 'Now select the increment to count by and hit Enter ');
$d = trim(fgets(STDIN));
if ($d == "" || $d == 0) {
	$d = 1;
}

if (is_numeric($b) && is_numeric($c) && is_numeric($d)) {
	for ($a = $b; $a <= $c; $a += $d) {
	echo "\$a has a value of {$a}\n";
	}

} else {
	fwrite(STDOUT, 'Not valid input. Start over... ');
}

?>