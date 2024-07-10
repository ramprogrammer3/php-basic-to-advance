<?php
echo "<p>__get method in php </p>";

class abc
{

    private $name = "Ram Kumar";
    public $data = ["name" => "Ram Kumar", 'course' => "PHP", "fees" => 2000];

    public function __get($name)
    {
        echo "You are trying to access not existing or private property ($name) <br>";

        if(array_key_exists($name,$this->data)){
               return $this->data[$name]; 
        }else{
            return "This key $name is not defined";
        }
    }
}


$test = new abc();

$test->name;

print_r($test->data);
echo "<br> <br>";
echo $test->data['name'];
echo "<br> <br>";
echo $test->name;
