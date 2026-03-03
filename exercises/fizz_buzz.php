<?php
    define("FIZZ", 3);
    define("BUZZ", 5);
    define("MAX_COUNT", 100);

    for ($i = 1; $i <= MAX_COUNT; $i++) {
        if ($i % (FIZZ * BUZZ) == 0) {
            echo 'FizzBuzz<br>';
        } elseif ($i % FIZZ == 0) {
            echo 'Fizz<br>';
        } elseif ($i % BUZZ == 0) {
            echo 'Buzz<br>';
        } else {
            echo $i . '<br>';
        }
    }