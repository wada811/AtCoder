<?php
    fscanf(STDIN, "%d", $n);
    $data = array();
    $max_distance = 0;
    for($i = 0; $i < $n; $i++){
        fscanf(STDIN, "%d", $data[$i]);
        $max_distance += $data[$i];
    }
    
    rsort($data, SORT_NUMERIC);
    
    $min_distance = $data[0];
    for($i = 1; $i < $n; $i++){
        $min_distance -= $data[$i];
    }
    if($min_distance < 0){
        $min_distance = 0;
    }
    echo $max_distance . "\n" . $min_distance . "\n";
?>