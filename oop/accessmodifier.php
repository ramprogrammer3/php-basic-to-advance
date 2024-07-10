
<?php
echo "<p><b>Access modifier in php </b></p>";

/*
    class person{
       
        public $name;
        
        public function showName(){
            echo "Person name is $this->name <br>";
        }
    }

    $person1 = new person();
    $person1->name = "ram kumar";
    $person1->showName();

    */




 /*   
  #public access modifier  

class Base
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function showName()
    {
        echo "Your name is : $this->name <br> ";
    }

    
}

$base1 = new Base("Ram kumar");
$base1->showName();

$base1->name = "Ram Maniyari";
$base1->showName();

*/


class Base
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function showName()
    {
        echo "Your name is : $this->name <br> ";
    }

    
}

class derived extends Base{

    public function getName(){
        // $this->name = "palak";
        $this->showName();
        echo "name from derived class $this->name  <br>";
    }
}

$base1 = new derived("Ram Bhai");

$base1->getName();




?>