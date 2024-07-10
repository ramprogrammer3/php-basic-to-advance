

<?php

echo "<h3>Traits in php </h3>";

trait hello
{
    public function sayHello()
    {
        echo "Hello Everyone <br>";
    }

    public function sayHi()
    {
        echo "Hi everyone <br>";
    }
}

trait bye
{
    public function sayBye()
    {
        echo "bye bye Everyone <br>";
    }
}

class base
{
    use hello, bye;
}

class base2
{
    use hello, bye;
}

$test = new base();
$test->sayHello();
$test->sayBye();

$test2 = new base2();
$test2->sayHello();
$test2->sayBye();
$test2->sayHi();



?>