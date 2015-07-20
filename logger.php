<?php

date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message) {
	//date and time formatting
	$todaysDate = date('Y-m-d');
	$timeNow = date('H:i:s');

	//appends string to file if file exists, otherwise new file is created
	$stringToWrite = "$todaysDate $timeNow [{$logLevel}] $message"; 
	$filename = 'txt/log-' . $todaysDate . '.log';
	$handle = fopen($filename, 'a+');
	fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);
}

//these logInfo() and logError() functions call logMessage(), passing the appropriate log level values. this allows for custom log messaging, which makes code more reusable.

function logInfo($message) {
	return logMessage('INFO', $message);
}

function logError($message) {
	return logMessage('ERROR', $message);
}

logError("This is a 405 ERROR") . PHP_EOL;
logInfo("here's a custom info message. greater reusability. woohoo!") . PHP_EOL;