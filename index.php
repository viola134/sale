<?php
$now = time();
$future = mktime (24,0,0,12,31,2022);
echo "Сегодняшняя дата:"." ". date("l d F Y G:i:s", $now);
echo "\n";
echo "Дата окончания акции:"." ".date("l d F Y G:i:s", $future);
echo "\n";
$dif = $future - $now;
$days = $dif/(60*60*24);
echo "Количество дней до окончания акции:"." ".floor($days);