<?php   

Class Fibonacci{
    public $num = 0;
    public $n1 = 0;
    public $n2 = 1;

    public function calculate() {
        echo "<h3>Fibonacci series for first 10 numbers: </h3>";
        echo $this->n1 . ' ' . $this->n2 . ' ';
        while ($this->num < 10 )  
        {  
            $this->n3 = $this->n2 + $this->n1;  
            echo $this->n3.' ';  
            $this->n1 = $this->n2;  
            $this->n2 = $this->n3;  

            $this->num = $this->num + 1;  
        }
    }
}

$obj = new Fibonacci();
$obj->calculate();
// 0 1 1 2 3 5 