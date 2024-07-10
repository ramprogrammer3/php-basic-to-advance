
<?php

echo "<h2> Abstract class in php </h2>";

abstract class parentClass{

    public $name;

    // method of abstract class
    abstract protected function calc($a,$b);

}


class childClass extends parentClass{

    public function calc($num1,$num2){
        echo "The sum is " . $num1 + $num2;
    }
}


// $obj1 = new parentClass();

$obj1 = new childClass();

$obj1->calc(10,20);



?>