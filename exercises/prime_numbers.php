<?php
    const MAX_COUNT = 100;

    for ($i = 2; $i <= MAX_COUNT; $i++) {
        $isPrime = true;

        for ($j = 2; $j * $j <= $i; $j++) { 
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $i . '<br>';
        }
    }