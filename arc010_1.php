<?php
fscanf(STDIN, "%d %d %d %d", $num, $days, $limit, $purchase);
for($i = 1; $i <= $days; $i++){
    $distribute = trim(fgets(STDIN));
    if($limit >= $num){
        $num += $purchase;
    }
    if($num >= $distribute){
        $num -= $distribute;
    }else{
        echo $i . PHP_EOL;
        exit();
    }
}
echo 'complete' . PHP_EOL;
?>
