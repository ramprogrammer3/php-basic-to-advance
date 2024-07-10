
<?php

    class calculation{

        public $a,$b,$c;

        function sum(){
            $this->c = $this->a + $this->b;
            return $this->c;
        }

        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $c1 = new calculation();
    $c1->a = 20;
    $c1->b = 10;

    $c2 = new calculation();
    $c2->a = 50;
    $c2->b = 35;

    echo "Sum value of C1 object " .$c1->sum() . "<br>";
    echo "Sum value of C2 object " .$c2->sum() . "<br>";

    echo "Substraction of c1 object ". $c1->sub() . "<br>";
    echo "Substraction of c2 object ". $c2->sub() . "<br>";
   
?>