
<?php

    echo "method overriding in php <br>";

    class Base{

        public $name = "Parent class";

        function __construct()
        {
            echo "<h4>Parent constructor is called</h4>";
        }


        public function showName(){
            echo "name from parent class $this->name <br>";
        }
    }

    class derived extends Base{
        public $name = "Child class";

        public function __construct()
        {
            echo "<h4>child constructor is callled </h4>";
        }

        public function showName()
        {
            echo "<h4>Name from child class $this->name </h4>";
        }

    }

    $base1 = new derived();

    echo $base1->name . "<br>";
    $base1->showName();


?>