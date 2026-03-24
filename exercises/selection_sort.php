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
    for ($i = 0; $i < ARRAY_SIZE - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < ARRAY_SIZE; $j++) {
            if ($numbers[$j] < $numbers[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $numbers[$i];
        $numbers[$i] = $numbers[$minIndex];
        $numbers[$minIndex] = $temp;
    }

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        echo $numbers[$i] . ' ';
    }
    echo '<br>';

    echo 'Desc: ';
    for ($i = 0; $i < ARRAY_SIZE - 1; $i++) {
        $maxIndex = $i;
        for ($j = $i + 1; $j < ARRAY_SIZE; $j++) {
            if ($numbers[$j] > $numbers[$maxIndex]) {
                $maxIndex = $j;
            }
        }
        $temp = $numbers[$i];
        $numbers[$i] = $numbers[$maxIndex];
        $numbers[$maxIndex] = $temp;
    }

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        echo $numbers[$i] . ' ';
    }
    echo '<br>';
