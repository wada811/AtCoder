<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);
for($i = 1; $i < 128; $i++){
	if(($i % 3 == $a) && ($i % 5 == $b) && ($i % 7 == $c)){
		echo $i.PHP_EOL;
	}
}
?>