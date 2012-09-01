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
    return preg_replace_callback(
        '/([a-z0-9])_([a-z])/',
        create_function('$matches', 'return $matches[1].strtoupper($matches[2]);'),
        $str);
}
function isSnakeCase($str){
    return preg_match('/^_*[a-z][a-z0-9]+(_[a-z][a-z0-9]+)+_*$/', $str, $matches);
}
function toSnakeCase($str){
    return preg_replace_callback(
        '/([a-z0-9])([A-Z])/', 
        create_function('$matches', 'return $matches[1]."_".strtolower($matches[2]);'),
        $str);
}
?>