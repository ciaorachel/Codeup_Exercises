<?php  
require_once 'Log.php';

$log1 = new Log();

$log1->info("Omg, it worked!");

$log1->error("errrrror...");

echo $log1->getFileName() . PHP_EOL;

echo gettype($log1->getFileName()) . PHP_EOL;

echo $log1->getHandle() . PHP_EOL;

//$log1->setFileName('LalaLog') . PHP_EOL; //Output: Fatal error: call to protected method  -- this was expected


?>