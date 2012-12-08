<?php
$sentence = fgets(STDIN);
fscanf(STDIN, "%d", $n);
$filters = array();
for($i = 0; $i < $n; $i++){
    $filters[] = '/^' . str_replace('*', '.', trim(fgets(STDIN))) . '$/';
}
$words = explode(' ', $sentence);
$censored = preg_replace_callback(
                $filters,
                create_function(
                    '$matches',
                    'return str_repeat("*", strlen($matches[0]));'
                ),
                $words
            );
echo implode(' ', $censored) . PHP_EOL;
?>