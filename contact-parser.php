<?php

function parseContacts($filename)
{
    //$contacts = array();
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contentsArray = explode(PHP_EOL, $contents);
    //$backTogether = implode('|', $contacts);

    foreach ($contentsArray as $key => $contact) {
    	$contactArray = explode('|', $contact);
    	//$contacts[$key]['name'] = $contactArray[0];
    	//$contacts[$key]['number'] = $contactArray[1];

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
