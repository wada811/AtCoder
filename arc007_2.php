<?php
fscanf(STDIN, "%d %d", $n, $m);
for($i = 0; $i < $m; $i++){
    fscanf(STDIN, "%d", $playlist[]);
}
for($i = 0; $i < $n; $i++){
    $cd[] = $i + 1;
}
$now = 0;
for($i = 0; $i < $m; $i++){
    if($now !== $playlist[$i]){
        $next = array_search($playlist[$i], $cd);
        list($cd[$next], $now) = array($now, $cd[$next]);
    }
}
for($i = 0; $i < $n; $i++){
    echo $cd[$i].PHP_EOL;
}
?>