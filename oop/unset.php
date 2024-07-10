
<?php

echo "<h4>Unset property in php </h4>";

class student
{

    public $course = "PHP course";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname)
    {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __unset($name)
    {
        unset($this->$name);
    }
}


$test = new student();

$test->setName("Ram", "Kumar");

unset($test->first_name);
print_r($test);

// unset($test->course);
// echo $test->course;



?>

