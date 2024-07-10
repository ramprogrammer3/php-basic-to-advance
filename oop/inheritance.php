<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($name,$age,$salary)
        {
            echo "<h4>Employee constructor is called</h4>";
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }

        function info(){
            echo "<h3>Employee profile : </h3>";
            echo "Employee name is : $this->name <br>";
            echo "Employee age is : $this->age <br>";
            echo "Employee salary is : $this->salary <br>";
        }
    }

    class manager extends employee{

        public $ta = 1000;
        public $phoneBill = 500;
        public $totalSalary;

        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phoneBill;
            echo "<h4>Manager profile : </h4>";
            echo "<p>Manager name is : $this->name </p>";
            echo "<p>Manager age is : $this->age </p>";
            echo "<p>Manager salary is : $this->totalSalary </p>";
        }
    }


    $e1 = new employee("Ram",25,2000);

    $e1->info();
    echo "<br><br>";

    $m1 = new manager("piku",22,3000);
    $m1->info();


?>