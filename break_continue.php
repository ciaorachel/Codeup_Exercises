<?php  
// Loop 1 uses continue to count from 1 to 100 and notate the even numbers
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i % 2 == 1) {
        continue;
    }
    echo "^ that is an even number.\n";
}


// Loop 2 uses break to count from 1 to 100 but stops after 10
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 10) {
        break;
    }
}
echo "^ #10 is the stopping point.\n";

?>