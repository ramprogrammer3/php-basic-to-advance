

<?php

echo "<h3>Late static binding in php </h3>";

class base
{

    protected static $name = "Ram";

    public function show()
    {
        echo static::$name;
        // echo self::$name;
    }
}

class derived extends base
{
    protected static $name = " Kumar";
}

$test = new base();
$test->show();

$obj = new derived();
$obj->show();



?>