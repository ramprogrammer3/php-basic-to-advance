
<?php

echo "<p> __set method in php </p>";
class student
{

    private $name;

    public function __get($property)
    {
        echo "<p>You are trying to access non existing property or private property $property </p>";
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {

            echo "this is a non exising or private property $property  <br>";
        }
    }
}


$test = new student();

$test->name = "ram kumar";
$test->course = "PHP";


?>