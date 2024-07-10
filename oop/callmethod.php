<?php

echo "<p>Call method in php </p>";

class student
{

    private $first_name;
    private $last_name;

    private function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }


    public function __call($method, $arguments)
    {

        if (method_exists($this, $method)) {

            call_user_func_array([$this, $method], $arguments);
        } else {

            echo "This is private or non existing method $method ";
        }
    }
}


$test = new student();
$test->setName("Ram", "Kumar");

echo "<br><br>";
$test->personal();
