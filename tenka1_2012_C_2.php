<?php
fscanf(STDIN, "%s", $input);
preg_match_all('/([SHDC])([^SHDC]{1,2})/', $input, $matches);
$rsf = array('10', 'J', 'Q', 'K', 'A');
$cards = array('S' => 0, 'H' => 0, 'D' => 0, 'C' => 0);
for($i = 0; $i < count($matches[0]); $i++){
    $card = $matches[0][$i];
    $mark = $matches[1][$i];
    $num = $matches[2][$i];
    if(in_array($num, $rsf)){
        $cards[$mark]++;
    }
    if($cards[$mark] === 5){
        foreach($rsf as $number){
            $input = implode('.', explode($mark.$number, $input));
        }
        $input = explode('.', $input);
        array_pop($input);
        $trash = implode($input);
        break;
    }
}
$trash = empty($trash) ? '0' : $trash;
echo $trash.PHP_EOL;
?>