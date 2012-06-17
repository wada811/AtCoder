<?php
    fscanf(STDIN, "%s", $input);
    $splits = explode("/", $input);
    $date = new DateTime();
    $date->setDate($splits[0], $splits[1], $splits[2]);
    while(true){
        $year = $date->format("Y");
        $month = $date->format("m");
        $day = $date->format("d");
        $quotient = $year / $month / $day;
        if(floor($quotient) == ceil($quotient)){
            break;
        }
        $date->add(new DateInterval("P1D"));
    }
    echo $date->format("Y/m/d") . PHP_EOL;
?>