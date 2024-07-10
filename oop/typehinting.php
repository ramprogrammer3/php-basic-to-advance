

<?php

echo "<h4>Type hinting in php </h4>";

function sum(int $num)
{
    echo "The sum is " . $num + 1 . "<br>";
}

sum(10);
// sum("ram");

function fruits(array $names)
{
    foreach ($names as $name) {
        echo "<p> $name </p>";
    }
}

$fr1 = "apple";
fruits(["apple", "banana", 'manog', 'piku mango']);


class hello
{
    public function sayHello()
    {
        echo "<p>Hello everyone </p>";
    }
}

class bye
{
    public function saybye()
    {
        echo "<p>Bye everyone </p>";
    }
}

function wow(hello $class)
{
    $class->sayHello();
    // $class->saybye();
}

$test = new hello();
wow($test);

$obj = new bye();



?>