
<?php

    echo "Constructor in php <br>";

    class person{

        public $name,$age;

        // function __construct($name,$age)
        // {
        //     echo "constructor funcion is called <br>";
        //     $this->name = $name;
        //     $this->age = $age;
        // }


        function __construct($name = "No name", $age = 0)
        {
            echo "Constructor function is called <br>";
            $this->name = $name;
            $this->age = $age;
        }


        function show(){

            echo "Person name is $this->name <br>";
            echo "Person age is $this->age <br>";
        }

    }

    
    $ram = new person("Ram Kumar",20);
    $palak = new person("Palak Kumar",30);

    $ramu = new person();

    $ram->show();

    $palak->show();

    $ramu->show();


?>