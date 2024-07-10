

<?php

echo "<h4> namespace in php opp </h4>";

require 'product.php';
require 'testing.php';


$obj = new test\product();
// $obj1 = new pro\product();

function wow()
{
    echo "Wow from inex page <br>";
}

wow();
pro\wow();



?>