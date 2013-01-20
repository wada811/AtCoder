<?php
fscanf(STDIN, "%d %d %d", $consume, $create, $number);
$total = $number;
$rest = 0;
while($number >= $consume){
    $rest = $number % $consume;
    $number = (int)($number/ $consume) * $create;
    $total += $number;
    $number += $rest;
}
println($total);
function println($var, $line = null){
    if(is_null($line)){
        echo $var . PHP_EOL;
    }else{
        echo $line . ':' . $var . PHP_EOL;
    }
}
?>
