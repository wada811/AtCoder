<?php
$variable = trim(fgets(STDIN));
if(isCamelCase($variable)){
    $variable = toSnakeCase($variable);
}else if(isSnakeCase($variable)){
    $variable = toCamelCase($variable);
}
echo $variable.PHP_EOL;
 
function isCamelCase($str){
    return preg_match('/^_*[a-z][a-z0-9]*([A-Z][a-z0-9]*)*_*$/', $str, $matches);
}
function toCamelCase($str){
    preg_match('/^(_*).*$/', $str, $matches);
    $str = substr($str, strlen($matches[1]));
    return $matches[1].preg_replace('/_([a-z])/e', 'strtoupper("$1")', $str);
}
function isSnakeCase($str){
    return preg_match('/^_*[a-z][a-z0-9]*(_[a-z][a-z0-9]*)*_*$/', $str, $matches);
}
function toSnakeCase($str){
    return preg_replace('/([A-Z])/e', '"_".strtolower("$1")', $str);
}
?>