<?php
fgets(STDIN);
$line = trim(fgets(STDIN));
$line = strtolower($line);
$words = explode(' ', $line);
$convert = array(
    '/(b|c)/' => '1',
    '/(d|w)/' => '2',
    '/(t|j)/' => '3',
    '/(f|q)/' => '4',
    '/(l|v)/' => '5',
    '/(s|x)/' => '6',
    '/(p|m)/' => '7',
    '/(h|k)/' => '8',
    '/(n|g)/' => '9',
    '/(z|r)/' => '0',
    '/[aiueoy]/' => '',
    '/[^a-z0-9]/' => '',
);
$answers = array();
foreach($words as $word){
    $answers[] = preg_replace(array_keys($convert), array_values($convert), $word);
}
$answers = array_remove_empty($answers);
$answer = implode(' ', $answers);
println($answer);
/**
* 配列の要素の空文字とnull値を除去する
* @param array $array 調べる配列
* @return array 空要素を除去した配列
*/
function array_remove_empty($array){
    return array_filter($array, create_function('$value', 'return mb_strlen($value);'));
}
function println($var, $line = null){
    if(is_null($line)){
        echo $var . PHP_EOL;
    }else{
        echo $line . ':' . $var . PHP_EOL;
    }
}
?>
