<?php
// 土日の設定
$holidays = array();
$start = DateTime::createFromFormat('Y/m/d', '2012/01/01', new DateTimeZone('Asia/Tokyo'));
$end = clone $start;
$end->add(new DateInterval('P1Y'));
$period = new DatePeriod($start, new DateInterval('P1D'), $end);
foreach($period as $date){
    if($date->format('w') === '0' || $date->format('w') === '6'){
        $holidays[$date->format('Y/m/d')] = true;
    }else{
        $holidays[$date->format('Y/m/d')] = false;
    }
}
// 祝日の取得・設定
fscanf(STDIN, "%d", $n);
for($i = 0; $i < $n; $i++){
    fscanf(STDIN, "%d/%d", $month, $day);
    $date = DateTime::createFromFormat('Y/n/j', "2012/{$month}/{$day}", new DateTimeZone('Asia/Tokyo'));
    // 振替休日の設定
    while($holidays[$date->format('Y/m/d')]){
        $date->add(new DateInterval('P1D'));
    }
    $holidays[$date->format('Y/m/d')] = true;
}
// 最大連休日数の取得
$max = 0;
$count = 0;
foreach($holidays as $holiday){
    if($holiday){
        $count++;
    }else{
        $count = 0;
    }
    $max = max($max, $count);
}
echo $max . PHP_EOL;
?>
