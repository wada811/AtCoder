<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
fscanf(STDIN, "%d", $n);
$n_a = max($n * 1 - $a, 0);
$n_b = max($n * 2 - $b, 0);
$n_c = max($n * 3 - $c, 0);
echo $n_a . ' ' . $n_b . ' ' . $n_c . PHP_EOL;
?>