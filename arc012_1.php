<?php
$wday = trim(fgets(STDIN));
$days_until_holiday = array('Monday' => 5, 'Tuesday' => 4, 'Wednesday' => 3, 'Thursday' => 2, 'Friday' => 1, 'Saturday' => 0, 'Sunday' => 0);
echo $days_until_holiday[$wday] . PHP_EOL;
