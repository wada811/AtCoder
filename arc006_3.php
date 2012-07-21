<?php
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%d", $inputs[]);
}
$Mt = array();
for($i = 0; $i < $n; $i++){
    $min = 0;
    for($j = 0; $j < count($Mt); $j++){
        $pop = $Mt[$min][count($Mt[$min])-1];
        if($pop < $inputs[$i]){
            $min = $j;
        }
    }
    if($Mt[$min][count($Mt[$min])-1] >= $inputs[$i]){
            $Mt[$min][] = $inputs[$i];
    }else{
            $Mt[][] = $inputs[$i];
    }
}
echo count($Mt).PHP_EOL;
?>
