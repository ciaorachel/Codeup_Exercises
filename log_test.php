<?php  
require_once 'Log.php';

$log1 = new Log('cli');

$log1->info("here's the message: BOOYAH!");

$log1->error("here's the ERROR");

?>