<?php
$password = trim(fgets(STDIN));
$ascii_a = ord('a') - 1;
$numbars = array();
for($i = 0, $end = strlen($password); $i < $end; $i++){
    $numbars[] = ord($password[$i]) - $ascii_a;
}

$sum = array_sum($numbars);
// special case
if($sum === 1 || $sum === 26 * 20){
    // 'a' or 'zzzzzzzzzzzzzzzzzzzz'
    echo 'NO' . PHP_EOL;
    exit();
}

$answers = array();
if(count($numbars) === 1){
    // 'b' - 'z'
    $answers[0] = $numbars[0] - 1;
    $answers[1] = 1;
}else{
    while($sum){
        $answers[] = min(26, $sum);
        $sum -= min(26, $sum);
    }
}
// ex. 'za' -> 'az'
while($answers == $numbars){
    shuffle($answers);
}

$another_password = '';
for($i = 0, $count = count($answers); $i < $count; $i++){
    $another_password .= chr($answers[$i] + $ascii_a);
}
echo $another_password . PHP_EOL;
?>