<?php 

namespace model;

use control\StringManipulationContr;

class StringManipulationModel extends StringManipulationContr{

    public static function showData(){
        $input = "Tertulio C. Labajo III";
        $addedLetter = "C.";
        $replace = "Corpuz";
        $replacing = "Labajo";

        $obj1 = new StringManipulationContr($input);
        $obj2 = new StringManipulationContr($input);
        $obj3 = new StringManipulationContr($input);

        $result1 = $obj1->wordDay();
        $result2 = $obj1->strlen();
        $result3 = $obj1->wordCount();
        $result4 = $obj1->reverse();
        $result5 = $obj2->strpos($addedLetter);
        $result6 = $obj3->replace($replacing, $replace);

        return [
            'result1' => $result1,
            'result2' => $result2,
            'result3' => $result3,
            'result4' => $result4,
            'result5' => $result5,
            'result6' => $result6
        ];
    }
}
