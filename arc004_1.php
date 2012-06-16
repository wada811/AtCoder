<?php
	fscanf(STDIN, "%d", $n);
	$points = array();
	for($i = 0; $i < $n; $i++){
		fscanf(STDIN, "%d %d", $points[$i]['x'], $points[$i]['y']);
	}
	
	$longest_distance = 0;
	for($i = 0; $i < $n - 1; $i++){
		for($j = i + 1; $j < $n; $j++){
			$distance = sqrt(pow($points[$i]['x'] - $points[$j]['x'], 2) + pow($points[$i]['y'] - $points[$j]['y'], 2));
			if($longest_distance < $distance){
				$longest_distance = $distance;
			}
		}
	}
	echo $longest_distance."\n";
?>