<?php 
require_once 'model.php';

class User extends Model
{
	protected static $table = 'Users';
}

echo Model::getTableName() . PHP_EOL;
echo User::getTableName() . PHP_EOL;

?>