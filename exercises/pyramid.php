<?php
    echo '<pre>';

    const ROWS = 4;
    for ($i = 0; $i < ROWS; $i++) {
        for ($k = ROWS - 1 - $i; $k > 0; $k--) {
            echo ' ';
        }

        for ($j = 0; $j < 2 * $i + 1; $j++) {
            echo '*';
        }
        echo "\n";
    }
    echo '</pre>';