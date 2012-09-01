<?php
$variable = trim(fgets(STDIN));
if(isCamelCase($variable)){
    $variable = toSnakeCase($variable);
}else if(isSnakeCase($variable)){
    $variable = toCamelCase($variable);
}
echo $variable.PHP_EOL;
 
function isCamelCase($str){
    return preg_match('/^_*[a-z][a-z0-9]+([A-Z][a-z0-9]+)+_*$/', $str, $matches);
}
function toCamelCase($str){
    return preg_replace('/([a-z0-9])_([a-z])/e', '$1.strtoupper("$2")', $str);
}
function isSnakeCase($str){
    return preg_match('/^_*[a-z][a-z0-9]+(_[a-z][a-z0-9]+)+_*$/', $str, $matches);
}
function toSnakeCase($str){
    return preg_replace('/([a-z0-9])([A-Z])/e', '$1."_".strtolower("$2")', $str);
}
?>