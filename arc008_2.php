<?php
fscanf(STDIN, "%d %d", $n, $m);
for($i = 0; $i < $n; $i++){
    $name[] = fgetc(STDIN);
}
fgetc(STDIN); // throw line feed code
for($i = 0; $i < $m; $i++){
    $kit[] = fgetc(STDIN);
}
fgetc(STDIN); // throw line feed code
 
$name_counts = array_count_values($name);
$kit_counts = array_count_values($kit);
foreach($name_counts as $key => $name_count){
    if(array_key_exists($key, $kit_counts)){
        $counts[] = ceil($name_count / $kit_counts[$key]);
    }else{
        $count = -1;
        break;
    }
}
$count = isset($count) ? $count : max($counts);
echo $count.PHP_EOL;
?>