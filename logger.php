<?php

date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message) {
	$todaysDate = date('Y-m-d');
	$timeNow = date('H:i:s');
	$stringToWrite = "$todaysDate $timeNow [{$logLevel}] $message"; 
	$filename = 'txt/log-' . $todaysDate . '.log';
	$handle = fopen($filename, 'a+');
	fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);
}

//logMessage("INFO", "This is an info message.") . PHP_EOL;
//logMessage("ERROR", "This is an error message.") . PHP_EOL;

// Add logInfo() and logError() functions that call logMessage(), passing the appropriate log level values. Replace the calls to logMessage() with calls to the new functions you just created.

function logInfo($message) {
	return logMessage('INFO', $message);
}

function logError($message) {
	return logMessage('ERROR', $message);
}

logError("This is a 405 ERROR") . PHP_EOL;
logInfo("here's a custom info message. greater reusability. woohoo!") . PHP_EOL;