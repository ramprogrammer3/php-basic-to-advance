<?php

echo "<p>PHP Call static method </p>";

class student
{

    private static function hello($name)
    {
        echo "Hello $name <br>";
    }

    public static function __callStatic($name, $arguments)
    {
        if (method_exists(__CLASS__, $name)) {
            call_user_func_array([__CLASS__, $name], $arguments);
        } else {
            echo "Method does not exist : $name <br>";
        }
    }
}



student::hello("Ram Kumar");
