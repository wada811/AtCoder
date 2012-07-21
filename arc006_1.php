<?php
$winning = rtrim(fgets(STDIN));
fscanf(STDIN, "%d", $lucky_number);
$bought = rtrim(fgets(STDIN));

$winning_numbers = explode(' ', $winning);
$bought_numbers = explode(' ', $bought);

$intersects = array_intersect($winning_numbers, $bought_numbers);
$count = count($intersects);

switch($count){
    case 3:
        $grade = 5;
        break;
    case 4:
        $grade = 4;
        break;
    case 5:
        if(array_search($lucky_number, $bought_numbers) === FALSE){
            $grade = 3;
        }else{
            $grade = 2;
        }
        break;
    case 6:
        $grade = 1;
        break;
    default:
        $grade = 0;
        break;
}
echo $grade.PHP_EOL;
?>
