<?php
fscanf(STDIN, "%d", $n);
$isPrime[0] = $isPrime[1] = 0;
for($i = 2; $i < $n; $i++){
    $isPrime[$i] = 1;
}
for($i = 0; $i < $n; $i++){
    if($isPrime[$i] === 1){
        for($j = 2 * $i; $j < $n; $j += $i){
            $isPrime[$j] = 0;
        }
    }
}
$count = array_count_values($isPrime);
echo max(0, $count[1]).PHP_EOL;
?>