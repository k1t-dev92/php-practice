<?php
    const ARRAY_SIZE = 5;

    $numbers = [];
    echo 'Original: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        $numbers[] = rand(1, 100);
        echo $numbers[$i] . ' ';
    }
    echo '<br><br>';

    $temp;
    echo 'Asc: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = $i + 1; $j < ARRAY_SIZE; $j++) {
            if ($numbers[$i] > $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }

    for ($i = 0; $i < ARRAY_SIZE; $i++) {                                                                      
        echo $numbers[$i] . ' ';                                                                               
    }           
    echo '<br>';

    echo 'Desc: ';
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = $i + 1; $j < ARRAY_SIZE; $j++) {
            if ($numbers[$i] < $numbers[$j]) {                                                                 
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];                                                                   
                $numbers[$j] = $temp;
            }                                                                                                  
        }
    }                                                                                                          
                
    for ($i = 0; $i < ARRAY_SIZE; $i++) {                                                                      
        echo $numbers[$i] . ' ';
    }                                                                                                          
    echo '<br>';