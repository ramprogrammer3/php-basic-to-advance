
<?php

echo "PHP isset property <br>";

class student
{

    public $course;
    private $first_name;
    private $last_name;


    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __isset($name)
    {
        echo isset($this->$name);
    }
}

$test = new student();

$test->setName("Ram","Kumar");
$test->course = "PHP";

echo isset($test->course);


?>