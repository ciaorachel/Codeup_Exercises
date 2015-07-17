<?php

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contentsArray = explode(PHP_EOL, $contents);

    foreach ($contentsArray as $key => $contact) {
    	//Explode the contacts at pipe symbol
    	$contactArray = explode('|', $contact);

    	//Option 1 for renaming keys
    	//$contacts[$key]['name'] = $contactArray[0];
    	//$contacts[$key]['number'] = formatNumber($contactArray[1]);

    	//Option 2 for renaming keys
    	$contacts[] = array(
    		'name' => $contactArray[0],
    		'number' => formatNumber($contactArray[1]),
    	);
    }
    fclose($handle);
    return $contacts;
}

function formatNumber ($number) {
	return substr($number, 0, 3) .'-' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
}


var_dump(parseContacts('contacts.txt'));
