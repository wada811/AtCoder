<?php
// デバッグ用関数
function echos($array, $line){
    echo $line . '::k: ' . implode(' ', array_keys($array)) . PHP_EOL;
    echo $line . '::v: ' . implode(' ', $array) . PHP_EOL;
}
// 変換処理はここから
$cardinalNumber = trim(fgets(STDIN));
$cardinalNumbers = explode(' ', $cardinalNumber);
fscanf(STDIN, '%d', $n);
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, '%d', $targetNumbers[]);
}
// echos($targetNumbers, __LINE__);
// 14::k: 0 1 2 3 4 5 6 7 8 9
// 14::v: 1 2 3 4 5 6 7 8 9 10
// targetNumbers の数字をアルファベットに置換
$alphabets = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');
$numbers = array_keys($alphabets);
$targetAlphabets = str_replace($numbers, $alphabets, $targetNumbers);
// echos($targetAlphabets, __LINE__);
// 21::k: 0 1 2 3 4 5 6 7 8 9
// 21::v: b c d e f g h i j ba
// このアルファベットを cardinalNumbers の順になるようにソート
$cardinalAlphabets = array();
for($i = 0, $end = count($cardinalNumbers); $i < $end; $i++){
    $cardinalAlphabets[$i] = $alphabets[$cardinalNumbers[$i]];
}
// echos($cardinalAlphabets, __LINE__);
// 29::k: 0 1 2 3 4 5 6 7 8 9
// 29::v: a i b d f e j h g c
// targetAlphabets を cardinalAlphabets の k に置換
$numbers = array_keys($cardinalAlphabets);
$atCoderNumbers = str_replace($cardinalAlphabets, $numbers, $targetAlphabets);
// echos($atCoderNumbers, __LINE__);
// 35::k: 0 1 2 3 4 5 6 7 8 9
// 35::v: 2 9 3 5 4 8 7 1 6 20
// この数値を昇順に並べ替える
asort($atCoderNumbers);
// echos($atCoderNumbers, __LINE__);
// 40::k: 7 0 2 4 3 8 6 5 1 9
// 40::v: 1 2 3 4 5 6 7 8 9 20
// この順の k で targetNumbers を得る
$results = array();
$orders = array_keys($atCoderNumbers);
foreach($orders as $order){
    $results[] = $targetNumbers[$order];
}
// echos($results, __LINE__);
// 49::k: 0 1 2 3 4 5 6 7 8 9
// 49::v: 8 1 3 5 4 9 7 6 2 10
// 出力！
echo implode(PHP_EOL, $results) . PHP_EOL;
?>
