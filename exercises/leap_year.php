<?php
    $year = 2024;

    if ($year % 400 == 0) {
        echo 'Leap Year';
    } else if ($year % 100 == 0) {
        echo 'Common Year';
    } else if ($year % 4 == 0) {
        echo 'Leap Year';
    } else {
        echo 'Common Year';
    }