<?php
fscanf(STDIN, "%d %d", $n, $m);
for($i = 0; $i < $m; $i++){
    fscanf(STDIN, "%d", $playlist[]);
}
$now = 0;
for($i = 1; $i <= $n; $i++){
    $case[] = $i;
}
for($i = 0; $i < $m; $i++){
    if($now !== $playlist[$i]){
        $next = array_search($playlist[$i], $case);
        list($case[$next], $now) = array($now, $case[$next]);
    }
}
for($i = 0; $i < $n; $i++){
    echo $case[$i].PHP_EOL;
}
?>