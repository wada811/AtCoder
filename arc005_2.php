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
// echo $w.'(x, y)=('.$x.', '.$y.'):'.$table[$y][$x].PHP_EOL;
    switch($w){
        case 'R':
            $x++;
            if($x == 8)$w = 'L';
            break;
        case 'L':
            $x--;
            if($x == 0)$w = 'R';
           break;
        case 'U':
            $y--;
            if($y == 0)$w = 'D';
            break;
        case 'D':
            $y++;
            if($y == 8)$w = 'U';
            break;
        case 'RU':
            $x++;$y--;
            if($x == 8 && $y == 0){
                $w = 'LD';
            }elseif($x == 8){
                $w = 'LU';
            }elseif($y == 0){
                $w = 'RD';
            }
            break;
        case 'RD':
            $x++;$y++;
            if($x == 8 && $y == 8){
                $w = 'LU';
            }elseif($x == 8){
                $w = 'LD';
            }elseif($y == 8){
                $w = 'RU';
            }
            break;
        case 'LU':
            $x--;$y--;
            if($x == 0 && $y == 0){
                $w = 'RD';
            }elseif($x == 0){
                $w = 'RU';
            }elseif($y == 0){
                $w = 'LD';
            }
            break;
        case 'LD':
            $x--;$y++;
            if($x == 0 && $y == 8){
                $w = 'RU';
            }elseif($x == 0){
                $w = 'RD';
            }elseif($y == 8){
                $w = 'LU';
            }
            break;
        default:
            break;
    }
}
echo $auth_code.PHP_EOL;
?>