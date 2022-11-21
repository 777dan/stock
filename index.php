<?php
$months = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
$now = time();
$d = getdate();
$future = mktime(24, 0, 0, 12, 31, 2022);
echo "Сегодня: " . $d['mday'], " " . $months[$d['mon'] - 1], " " . $d['year'];
// echo "Сейчас: " . date('d F Y G:i:s', $now);
echo "\n";
echo "Дата оконачания акции: " . date('d F Y G:i:s', $future);
echo "\n";
$dif = $future - $now;
$days = $dif / (60 * 60 * 24);
$h = ($dif % (60 * 60 * 24)) / (60 * 60);
$m = ($dif % (60 * 60)) / 60;
// $s = $dif % 60;
echo "До конца акции осталось: " . floor($days) . " дней " . floor($h) . " часов " . floor($m) . " минут.";
