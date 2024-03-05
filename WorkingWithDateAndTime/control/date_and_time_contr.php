<?php

require "../model/date_and_time_model.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $timezone = isset ($_GET['timezone']) ? $_GET['timezone'] : '';

    if ($timezone) {
        $dateTimeDisplay = new Display($timezone);
        $dateTimeDisplay -> getTimeZone();
    }
}
