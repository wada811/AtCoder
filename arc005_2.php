<?php
fscanf(STDIN, "%d %d %s", $x, $y, $w);
for($i = 0; $i < 9; $i++){
    for($j = 0; $j < 9; $j++){
        $table[$i][$j] = fgetc(STDIN);
    }
    fgetc(STDIN); // throw line feed code
}
$x--;$y--; // for optimizing code
$auth_code = '';
for($i = 0; $i < 4; $i++){
    $auth_code .= $table[$y][$x];
    change($x, $y, $w);
    go($x, $y, $w);
}
exit($auth_code.PHP_EOL);

function go(&$x, &$y, $direction){
    switch($direction){
        case 'R':
            $x++;
            break;
        case 'L':
            $x--;
            break;
        case 'U':
            $y--;
            break;
        case 'D':
            $y++;
            break;
        case 'RU':
            $x++;$y--;
            break;
        case 'RD':
            $x++;$y++;
            break;
        case 'LU':
            $x--;$y--;
            break;
        case 'LD':
            $x--;$y++;
            break;
        default:
            break;
    }
}

function change($x, $y, &$direction){
    switch($x){
        case 0:
            if(strpos($direction, 'L') !== FALSE)$direction = str_replace('L', 'R', $direction);
            break;
        case 8:
            if(strpos($direction, 'R') !== FALSE)$direction = str_replace('R', 'L', $direction);
            break;
        default:
            break;
    }
    switch($y){
        case 0:
            if(strpos($direction, 'U') !== FALSE)$direction = str_replace('U', 'D', $direction);
            break;
        case 8:
            if(strpos($direction, 'D') !== FALSE)$direction = str_replace('D', 'U', $direction);
            break;
        default:
            break;
    }
}
?>