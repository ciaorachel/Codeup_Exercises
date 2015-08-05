<?php  

class Log 
{
	private $filename;
	private $handle;

	public function __construct($prefix = 'log')
    { 
    	if ($this->setFileName($prefix)) {
			$this->handle = fopen($this->filename, 'a');
		}
    }
	
	protected function setFileName ($prefix)
	{
		if (gettype($prefix) == 'string') {
			$this->prefix = trim($prefix);
			$this->filename = 'txt/' . $prefix . '-' . date('Y-m-d') . '.log';

			if (touch($this->filename) && is_writable($this->filename)) {
				return TRUE;
			} else {
				die("Died -- not writable..." . PHP_EOL);
			}

		} else {
			die("Died -- need string only please..." . PHP_EOL);
		}
		
	}

	public function getFileName()
	{
		return $this->filename;
	}

	public function getHandle()
	{
		return $this->handle;
	}

	public function logMessage($logLevel, $message) {
		$stringToWrite = date('Y-m-d H:i:s') . "[{$logLevel}] $message"; 
		fwrite($this->handle, PHP_EOL . $stringToWrite);
	}
		
	public function __destruct()
    {
		if (isset($this->handle)) {
			fclose($this->handle);
		}    	
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