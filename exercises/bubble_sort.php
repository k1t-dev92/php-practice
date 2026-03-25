<?php
    const ARRAY_SIZE = 5;

    $numbers = [];
    echo 'Original: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        $numbers[] = rand(1, 100);
        echo $numbers[$i] . ' ';
    }
    echo '<br><br>';

    echo 'Asc: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = 0; $j < ARRAY_SIZE - $i - 1; $j++) {
            if ($numbers[$j] > $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        echo $numbers[$i] . ' ';
    }
    echo '<br>';

    echo 'Desc: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = 0; $j < ARRAY_SIZE - $i - 1; $j++) {
            if ($numbers[$j] < $numbers[$j + 1]) {
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
            }
        }
    }

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        echo $numbers[$i] . ' ';
    }
    echo '<br>';