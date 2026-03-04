<?php
    echo '<pre>';
    
    for ($i = 1; $i <= 9; $i++) {
        for ($j = 1; $j <= 9; $j++) {
            echo sprintf('%3d', $i * $j);
        }
        echo "\n";
    }
    echo '</pre>';