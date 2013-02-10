<?php
fscanf(STDIN, "%d %d %d %d", $N, $v_a, $v_b, $L);
for($i = 0; $i < $N; $i++){
    $L = $L / $v_a * $v_b;
}
echo round($L, 7) . PHP_EOL;
