<?php
    const MAX_NUM = 10;

    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i <= MAX_NUM; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    for ($i = 0; $i <= MAX_NUM; $i++) {
        echo $fibonacci[$i] . ' ';
    }