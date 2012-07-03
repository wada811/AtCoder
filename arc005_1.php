<?php
fscanf(STDIN, "%d", $n);
$sentence = trim(fgets(STDIN));
$words = explode(' ', substr($sentence, 0, strlen($sentence) - 1));
$count = 0;
foreach($words as $word){
    $count += preg_match('/^(TAKAHASHIKUN|Takahashikun|takahashikun)$/', $word, $match);
}
echo $count . PHP_EOL;
?>