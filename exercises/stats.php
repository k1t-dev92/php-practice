<?php
    const ARRAY_SIZE = 10;

    $numbers = [];
    $sum = 0;
    $sum_of_squares = 0;
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        $numbers[] = rand(1, 100);
        $sum += $numbers[$i];
        $sum_of_squares += $numbers[$i] ** 2;
        echo $numbers[$i] . ' ';
    }
    echo '<br>';

    $average = $sum / ARRAY_SIZE;
    $variance = ($sum_of_squares / ARRAY_SIZE) - ($average * $average);

    echo 'ave = ' . $average . '<br>';
    echo 'var = ' . round($variance, 1) . '<br>';