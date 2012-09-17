<?php
fscanf(STDIN, "%c", $key);
fscanf(STDIN, "%s", $string);
$string = str_replace($key, '', $string);
echo $string.PHP_EOL;
?>