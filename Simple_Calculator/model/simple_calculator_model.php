<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$op = $_POST['op'];

	$obj = new Calculator($_POST['num1'], $_POST['num2'], $_POST['op']);
	$calculate = $obj->calculateAll();
}
