
<?php
echo "PHP autoload funcion <br>";

// require 'classes/first.php';
// require 'classes/second.php';

function load_model($class)
{
    $path_to_file = 'classes/' . $class . '.php';

    if (file_exists($path_to_file)) {
        require $path_to_file;
    }
}

$test = new first();
$test1 = new second();


?>