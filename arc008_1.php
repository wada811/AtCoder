<?php
fscanf(STDIN, "%d", $n);
$cost = (int)($n / 10) * 100 + min($n % 10 * 15, 100);
echo $cost.PHP_EOL;
?>