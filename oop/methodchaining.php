

<?php

echo "<h4>method chaining in php </h4>";

class personal
{
    public function __construct()
    {
        echo "<h4> constructor called </h4>";
    }

    public function first()
    {
        echo "<p>This is first fuction</p>";
        return $this;
    }

    public function second()
    {
        echo "<p>This is second function</p>";
        return $this;
    }

    public function third()
    {
        echo "<p>This is third function </p>";
        // return $this;
    }
}



$test = new personal();

$test->first();
$test->second();
$test->third();

$test->first()->second()->third();





?>