<?php
fscanf(STDIN, "%d", $n);
$usage   = 1;
$usagee  = 0;
$usageee = 0;
for($i = 0; $i < $n; $i++){
    $usageee += $usagee;
    $usagee   = $usage;
    $usage    = $usageee;
}
$count = $usage + $usagee + $usageee;
echo $count.PHP_EOL;
?>
