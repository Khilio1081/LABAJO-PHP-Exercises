<?php

$numbers = array(1, 7, 4, 9, 6, 1, 5, 21);

   function ascend($numbers){
        echo "Sorted in ascending order<br>";
        sort($numbers);

        $arrlength = count ($numbers);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " - ";
        }

    }

    function descend($numbers){
        echo "Sorted in descending order <br>";
        rsort($numbers);

        $arrlength = count ($numbers);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " - ";
        } 
    }
