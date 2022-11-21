<?php
$months = ["Января", "Февраля", "Марта", "Апреля", "Мая", "Июня", "Июля", "Августа", "Сентября", "Октября", "Ноября", "Декабря"];
$now = time();
$d = getdate();
$future = mktime(23, 0, 0, 12, 31, 2022);
echo "Сегодня: " . $d['mday'], " " . $months[$d['mon'] - 1], " " . $d['year'];
// echo "Сейчас: " . date('d F Y G:i:s', $now);
echo "\n";
// echo "Дата оконачания акции: " . date('d F Y G:i:s', $future);
echo "Дата оконачания акции: " . date('j', $future), " " . $months[date('n', $future) - 1], " " . date('Y', $future), " года в " . date('G', $future) . ":" . date('i', $future);
echo "\n";
$dif = $future - $now;
$days = (string)floor($dif / (60 * 60 * 24));
$h = (string)floor(($dif % (60 * 60 * 24)) / (60 * 60));
$m = (string)floor(($dif % (60 * 60)) / 60);
// $s = $dif % 60;
function formattingDate($m, $days, $h)
{
    $numValuesDate = [$m, $days, $h];
    $strValuesDate = [['минута', 'минут', 'минуты'], ['день', 'дней', 'дня'], ['час', 'часов', 'часа']];
    $typeDateData = [];
    for ($i = 0; $i < count($numValuesDate); $i++) {
        switch ($numValuesDate[$i]) {
            case $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] == 1:
                $typeDateData[$i] = $strValuesDate[$i][0];
                break;
            case $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] == 0 || $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] >= 5 && $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] <= 20:
                $typeDateData[$i] = $strValuesDate[$i][1];
                break;
            case $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] >= 2 && $numValuesDate[$i][strlen($numValuesDate[$i]) - 1] <= 4:
                $typeDateData[$i] = $strValuesDate[$i][2];
                break;
            default:
                echo "error";
                break;
        }
    }
    echo "До конца акции осталось: " . $days . " " .  $typeDateData[1] . " " . $h . " " . $typeDateData[2] . " " . $m . " " . $typeDateData[0];
}
formattingDate($m, $days, $h);
