<?php

    fscanf(STDIN, "%d %d", $a, $b);
    $temperature = abs($a - $b);
    $count = 0;
    
    while($temperature){
        if($temperature >= 8){
            $temperature -= 10;
        }elseif($temperature >= 3){
            $temperature -= 5;
        }else{
            $temperature--;
        }
        $temperature = abs($temperature);
        $count++;
    }
    
    echo $count."\n";
    
?>
