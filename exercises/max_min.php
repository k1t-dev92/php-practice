<?php
    const ARRAY_SIZE = 5;

    $numbers = [];
    echo 'data: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        $numbers[] = rand(1, 100);
        echo $numbers[$i] . ' ';
    }
    echo '<br>';

    $max = $numbers[0];
    $min = $numbers[0];

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        if ($max < $numbers[$i]) {
            $max = $numbers[$i];
        }

        if ($min > $numbers[$i]) {
            $min = $numbers[$i];
        }
    }

    echo 'max = ' . $max . '<br>';
    echo 'min = ' . $min . '<br>';