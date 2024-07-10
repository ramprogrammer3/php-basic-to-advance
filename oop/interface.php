

<?php

echo "Interface class in php <br>";

interface parent1
{
    function sum($number1, $number2);
}

interface parent2
{
    function sub($number1, $number2);
}


class childClass implements parent1, parent2
{
    public function sum($number1, $number2)
    {
        echo "The sum is " . $number1 + $number2 . "<br>";
    }

    public function sub($number1, $number2)
    {
        echo "Substracion is " . $number1 - $number2;
    }
}


$obj = new childClass();
$obj->sum(10, 20);
$obj->sub(20, 30);



?>