<?php
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%d", $inputs[]);
}
$Mt = array();
for($i = 0; $i < $n; $i++){
    $pos = 0;
    for($j = 0; $j < count($Mt); $j++){
        $pop = $Mt[$pos][count($Mt[$pos])-1];
        if($pop < $inputs[$i]){
            $pos = $j;
        }
    }
    if($Mt[$pos][count($Mt[$pos])-1] >= $inputs[$i]){
            $Mt[$pos][] = $inputs[$i];
    }else{
            $Mt[][] = $inputs[$i];
    }
}
echo count($Mt).PHP_EOL;
?>
