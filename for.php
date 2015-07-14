<?php  

fwrite(STDOUT, 'Key in a starting number, then hit Enter');

$b = trim(fgets(STDIN));

fwrite(STDOUT, 'Now pick the ending number and hit Enter ');

$c = trim(fgets(STDIN));

for ($a = $b; $a <= $c; $a++) {
	echo "\$a has a value of {$a}\n";
}



?>