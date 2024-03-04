<?php

require "../model/array_manipulation_model.php";

$numbers = array(1, 7, 4, 9, 6, 1, 5, 21);

$num = new MyNumbers();
$shownum = new MyNumbers();

$shownum-> displayNum($numbers);

$ascend = $num->ascend($numbers);
$descend = $num->descend($numbers);
