<?php
fscanf(STDIN, "%d", $n);
$sentence = fgets(STDIN);
$words = explode(' ', str_replace(".", "", $sentence));
$count = 0;
foreach($words as $word){
    $count += preg_match('/^(TAKAHASHIKUN|Takahashikun|takahashikun)$/', $word, $match);
}
echo $count . PHP_EOL;
?>