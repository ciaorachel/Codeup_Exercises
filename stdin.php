<?php 
// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$firstName = trim(fgets(STDIN));

fwrite(STDOUT, 'What is your last name? ');
$lastName = trim(fgets(STDIN));

// Output the user's name
fwrite(STDOUT, "Hello $firstName $lastName\n");

?>