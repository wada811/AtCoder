<?php
fscanf(STDIN, "%d %d", $n, $rabbit);
$count = 0;
for($i = 1; $i <= $n; $i++){
    $count += pow($i, 2);
}
echo $count % $rabbit . PHP_EOL;
?>