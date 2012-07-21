<?php
fscanf(STDIN, "%d %d", $col, $row);
for($i = 0; $i < $row; $i++){
    for($j = 0; $j < 2 * $col - 1; $j++){
        $amida[$i][$j] = fgetc(STDIN);
    }
    fgetc(STDIN); // throw line feed code
}
$goal = fgets(STDIN);
$pos = strpos($goal, 'o');

for($i = $row - 1; $i >= 0; $i--){
    if($pos - 2 >= 0 && $amida[$i][$pos - 1] === '-'){
        $pos -= 2;
    }elseif($pos + 2 < count($amida[$i]) &&  $amida[$i][$pos + 1] === '-'){
        $pos += 2;
    }
}
$pos /= 2;
echo ++$pos.PHP_EOL;
?>
