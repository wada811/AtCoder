<?php
fscanf(STDIN, "%d %d", $n, $m);
for($i = 0; $i < $n;$i++){
    $name[] = fgetc(STDIN);
}
fgetc(STDIN);
for($i = 0; $i < $m;$i++){
    $kit[] = fgetc(STDIN);
}
fgetc(STDIN);

$name_counts = array_count_values($name);
$kit_counts = array_count_values($kit);
foreach($name_counts as $key => $name_count){
    if(array_key_exists($key, $kit_counts)){
        $diff[] = max($name_count - $kit_counts[$key], 0);
    }else{
        $count = -1;
        break;
    }
}
$count = isset($diff) ? max($diff) + 1 : $count;
echo $count.PHP_EOL;
?>