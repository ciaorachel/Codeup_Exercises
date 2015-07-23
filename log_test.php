<?php  
require_once 'Log.php';

date_default_timezone_set('America/Chicago');

$todaysDate = date('Y-m-d');

$log1 = new Log();

$log1->filename = 'txt/log-' . $todaysDate . '.log';

$log1->info("here's the message");

$log1->error("here's the ERROR");

?>