
<?php

echo "<p>PHP Magic method </p>";

class person
{
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "");
        echo "<p>This is constructor function</p>";
    }

    public function hello()
    {
        echo "<p>Hello everyone </p>";
    }

    public function __destruct()
    {
        echo "This is destruction function";
        mysqli_close($this->conn);
    }
}

$obj = new person();

$obj->hello();
$obj->hello();
$obj->hello();
$obj->hello();



?>