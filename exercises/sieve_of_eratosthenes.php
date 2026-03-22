<?php
    const MAX_NUMBER = 100;

    $isPrime = [];
    for ($i = 2; $i <= MAX_NUMBER; $i++) {
        $isPrime[$i] = true;
    }

    for ($p = 2; $p * $p <= MAX_NUMBER; $p++) {
        if (!$isPrime[$p]) {
            continue;
        }
        for ($m = $p * $p; $m <= MAX_NUMBER; $m += $p) {
            $isPrime[$m] = false;
        }
    }

    for ($i = 2; $i <= MAX_NUMBER; $i++) {
        if ($isPrime[$i]) {
            echo $i . ' ';
        }
    }
    echo '<br>';