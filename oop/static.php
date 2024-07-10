<?php

class base{

    public static $name = "Ram kumar";

    public static function show(){
        echo self ::$name;
    }

    // public function __construct($n)
    // {
    //     self ::$name = $n;
    //     self::show();
    // }
}

class derived extends base{
    public static function show(){
        echo parent ::$name;
    }
}

// echo base::$name . "<br>";
// base::show();

// $obj = new base("Hello");
$obj = new derived();
echo "<br>";
$obj->show();







?>