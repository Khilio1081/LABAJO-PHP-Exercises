<?php

if (isset($_POST['submit'])) {
    // Get the values from the form
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
}
    // Check which operator was chosen and perform the corresponding calculation
    if ($operator == 'add') {
      $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
      $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
      $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
      $result = $num1 / $num2;
    }
  
  
//   class calculator{
//     public $num1;
//     public $num2;
//     public $operand;

//     public function __construc($num1, $num2, $operand){
//         $this -> num1 = $num1;
//         $this -> num2 = $num2;
//         $this -> operand = $operand;
//     }

//     public function Compute(){
//         switch($this -> operand){
//             case 'add':
//                 $answer = $this->num1 + $this->num2;
//                 break;
//                 case 'subtract':
//                     $answer = $this->num1 - $this->num2;
//                     break;
//                     case 'multiply':
//                         $answer = $this->num1 * $this->num2;
//                         break;
//                         case 'divide':
//                             $answer = $this->num1 / $this->num2;
//                             break;
//                             default:
//                             $answer= "Error";
//                             break;
//         }
//       return $answer;  
//     } 
//   }

