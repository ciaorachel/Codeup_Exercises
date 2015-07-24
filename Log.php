<?php  

class Log 
{
	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
    { 
    	$this->filename = 'txt/' . $prefix . '-' . date('Y-m-d') . '.log';
		$this->handle = fopen($this->filename, 'a');
    }
	
	public function logMessage($logLevel, $message) {
		$stringToWrite = date('Y-m-d H:i:s') . "[{$logLevel}] $message"; 
		fwrite($this->handle, PHP_EOL . $stringToWrite);
	}
		
	public function __destruct()
    {
		fclose($this->handle);    	
    }


	public function info($message) 
	{
		return $this->logMessage('INFO', $message);
	}	

	public function error($message) 
	{
		return $this->logMessage('ERROR', $message);
	}
}

?>