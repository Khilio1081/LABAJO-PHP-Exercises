<?php

namespace control;

class StringManipulationContr {
    
    public $input;

    public function getControl() {

        function __construct($input) {
            $this->input = $input;
        }

        function wordDay() {
            return $this->input;
        }

        function strlen() {
            return strlen($this->input);
        }

        function wordCount() {
            return str_word_count($this->input);
        }

        function reverse() {
            return strrev($this->input);
        }

        function strpos($addedLetter) {
            return strpos($this->input, $addedLetter);
        }

        function replace($replacing, $replace) {
            return str_replace($replacing, $replace, $this->input);
        }
    }
}
