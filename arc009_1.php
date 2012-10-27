<?php
fscanf(STDIN, '%d', $n);
$sum = 0;
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, '%d %d', $num, $price);
    $sum += $num * $price;
}
$sum *= 1.05;
echo (int)$sum . PHP_EOL;
?>
