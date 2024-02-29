<?php
   $operator = ""; // Global


if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['op'];
}
    if ($operator == 'add') {
      $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
      $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
      $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
      $result = $num1 / $num2;
    } 


