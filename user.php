<?php 

class Father
{
    protected static $name = 'Darth Vader';

    public static function getName() 
    {
        return static::$name; //when set as return self::$name, both echoes return Darth Vader. return static::$name echoes back Darth and Luke.
    }
}

class Son extends Father
{
    protected static $name = 'Luke Skywalker';
}

echo Father::getName() . PHP_EOL;

echo Son::getName() . PHP_EOL;

?>