<?php  

class Log 
{
	public $filename;
	
	public function logMessage($logLevel, $message) {
		date_default_timezone_set('America/Chicago');
		$todaysDate = date('Y-m-d');
		$timeNow = date('H:i:s');
		$stringToWrite = "$todaysDate $timeNow [{$logLevel}] $message"; 
		$handle = fopen($this->filename, 'a');
		fwrite($handle, PHP_EOL . $stringToWrite);
		fclose($handle);
	}

	public function info($message) {
		return $this->logMessage('INFO', $message);
	}	

	public function error($message) {
		return $this->logMessage('ERROR', $message);
	}
}

?>