<?php

date_default_timezone_set('America/Chicago');

function logMessage($logLevel, $message) {
	$todaysDate = date('Y-m-d');
	$timeNow = date('H:i:s');
	$filename = 'txt/log-' . $todaysDate . '.log';
	$handle = fopen($filename, 'a+');
	fwrite($handle, $todaysDate . " " . $timeNow . " " . $logLevel . " " . $message . PHP_EOL);
	fclose($handle);
}

logMessage("INFO", "This is an info message.") . PHP_EOL;
logMessage("ERROR", "This is an error message.") . PHP_EOL;
