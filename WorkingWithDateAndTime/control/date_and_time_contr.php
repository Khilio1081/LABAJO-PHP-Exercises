<?php

namespace controller;


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $timezone = isset ($_GET['timezone']) ? $_GET['timezone'] : '';

    if ($timezone) {
        $dateTimeDisplay = new Display($timezone);
        $dateTimeDisplay -> getTimeZone();
    }
}
