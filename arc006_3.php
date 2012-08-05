<?php
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%d", $inputs[]);
}
$Mt = array();
for($i = 0; $i < $n; $i++){
    $max = 0;
    for($j = 0; $j < count($Mt); $j++){
        $pop = $Mt[$max][count($Mt[$max])-1];
        if($pop < $inputs[$i]){
            $max = $j;
        }
    }
    if($Mt[$max][count($Mt[$max])-1] >= $inputs[$i]){
            $Mt[$max][] = $inputs[$i];
    }else{
            $Mt[][] = $inputs[$i];
    }
}
echo count($Mt).PHP_EOL;
?>
