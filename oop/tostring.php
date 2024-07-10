<?php

echo "<p>To string method in php </p>";
class abc
{
    public function __toString()
    {
        return "Cannot print object as a string : ";
    }
}


$test = new abc();

echo $test;
