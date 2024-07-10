

<?php

echo "<h3>Trait method overriding in php </h3>";

trait hello
{
    public function sayHello()
    {
        echo "<h4> Hello from trait hello </h4>";
    }
}

trait hi
{
    public function sayHello()
    {
        echo "<h4> Hello from trait hi </h4>";
    }
}

class base
{
    use hello, hi {
        hello::sayHello insteadof hi;
        hi::sayHello as newHello;
    }


    public function sayHello()
    {
        echo "<h4> Hello from base class </h4>";
    }
}

class derived extends base
{
    use hello;
    public function sayHello()
    {
        echo "<h4> Hello from child class </h4>";
    }
}


$test = new base();
$test->sayHello();

$obj = new derived();
$obj->sayHello();


?>