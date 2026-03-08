<?php
    const ARRAY_SIZE = 5;

    $numbers = [];
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        $numbers[] = rand(1, 100);
        echo $numbers[$i] . ' ';
    }
    echo '<br>';

    $temp;
    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = 0; $j < ARRAY_SIZE; $j++) {
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

    for ($i = 0; $i < ARRAY_SIZE; $i++) {
        for ($j = 0; $j < ARRAY_SIZE; $j++) {
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