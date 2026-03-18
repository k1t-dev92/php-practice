<?php
    $year = 2024;

    if ($year % 400 == 0) {
        echo 'Leap Year';
    } elseif ($year % 100 == 0) {
        echo 'Common Year';
    } elseif ($year % 4 == 0) {
        echo 'Leap Year';
    } else {
        echo 'Common Year';
    }