<?php

class MyNumbers{
    public $numbers;

    public function ascend($numbers){
        echo "<br><br> Sorted in ascending order <br>";
        sort($numbers);

        $arrlength = count ($numbers);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " ";
        }
    }

    public function descend($numbers){
        echo "<br><br> Sorted in descending order <br>";
        rsort($numbers);

        $arrlength = count ($numbers);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " - ";
        } 
    }
    
    public function displayNum($numbers){
        echo "Numbers to be ascend and descend sort<br>";
        
        $arrlength = count ($numbers);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo " - ";
        }   

    }
}
