<?php
fscanf(STDIN, "%c", $c);
fscanf(STDIN, "%s", $string);
$string = preg_replace("/{$c}/", '', $string);
echo $string.PHP_EOL;
?>