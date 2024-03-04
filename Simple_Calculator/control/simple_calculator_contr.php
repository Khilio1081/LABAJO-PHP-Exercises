<?php

class Calculator{
  public $num1;
  public $num2;
  public $op;

	public function __construct($num1, $num2, $op) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->op = $op;
    }

	public function calculateAll(){
		if ($this->op == 'add') {
			return $this->num1 + $this->num2;
		  } elseif ($this->op == 'subtract') {
			return $this->num1 - $this->num2;
		  } elseif ($this->op == 'multiply') {
			return $this->num1 * $this->num2;
		  } elseif ($this->op == 'divide') {
			return $this->num1 / $this->num2;
		  } 
    } 
}

require "../model/simple_calculator_model.php";
