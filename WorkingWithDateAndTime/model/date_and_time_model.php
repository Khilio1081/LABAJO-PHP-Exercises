<?php

class Display {
    public $timezone;

    public function __construct($timezone) {
        $this->timezone = $timezone;
    }

    public function getTimeZone() {
       
        if ($this->timezone) {
            date_default_timezone_set($this->timezone);
            $now = new DateTime();

            echo "<h2>Current Date and Time in " . $this->timezone . ":</h2>";
            echo "<p>1. Date and time in ISO format: " . $now->format('Y-m-d H:i:s') . "</p>";
            echo "<p>2. Date and time in a readable format: " . $now->format('Y-m-d H:i:s') . "</p>";
            echo "<p>3. Date: " . $now->format('Y-m-d') . "</p>";
            echo "<p>4. Time: " . $now->format('H:i:s') . "</p>";
            echo "<p>5. Date and time in a custom format: " . $now->format('l, F j, Y g:i A') . "</p>";
        }
    }
}
