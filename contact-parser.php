<?php

function parseContacts($filename) {
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contentsArray = explode(PHP_EOL, $contents);

    foreach ($contentsArray as $key => $contact) {
    	//Explode the contacts at pipe symbol
    	$contactArray = explode('|', $contact);

    	//Renaming keys
    	$contacts[] = array(
    		'name' => $contactArray[0],
    		'number' => formatNumber($contactArray[1]),
    	);
    }
    fclose($handle);
    return $contacts;
}

//Function for formatting phone number
function formatNumber ($number) {
	return substr($number, 0, 3) .'-' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}

var_dump(parseContacts('contacts.txt'));
