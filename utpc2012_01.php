<?php
$date = trim(fgets(STDIN));
$date1 = array($date[0], $date[1], $date[2], $date[3]);
$date2 = array($date[5], $date[6], $date[8], $date[9]);
echo array_count_values($date1) == array_count_values($date2) ? 'yes' : 'no';
echo PHP_EOL;
?>