<?php
$str = rtrim(fgets(STDIN));
do{
    $str = str_replace('  ', ' ', $str);
}while(strpos($str, '  '));
$str = str_replace(' ', ',', $str);
echo $str.PHP_EOL;
?>
