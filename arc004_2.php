<?php
    fscanf(STDIN, "%d", $n);
    $distance = array();
    $max_distance = 0;
    for($i = 0; $i < $n; $i++){
        fscanf(STDIN, "%d", $distance[$i]);
        $max_distance += $distance[$i];
    }
    
    rsort($distance, SORT_NUMERIC);
    
    $min_distance = $distance[0];
    for($i = 1; $i < $n; $i++){
        $min_distance -= $distance[$i];
    }
    if($min_distance < 0){
        $min_distance = 0;
    }
    echo $max_distance . "\n" . $min_distance . "\n";
?>