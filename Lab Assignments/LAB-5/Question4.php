<?php
$largerDate = array('DD' => 15, 'MM' => 7, 'YY' => 2023);
$smallerDate = array('DD' => 10, 'MM' => 3, 'YY' => 2021);
$DD = $largerDate['DD'];
$MM = $largerDate['MM'];
$YY = $largerDate['YY'];
$DD1 = $smallerDate['DD'];
$MM1 = $smallerDate['MM'];
$YY1 = $smallerDate['YY'];
if ($DD < $DD1) {
    $DD += 30;
    $MM--;
}
$D = $DD - $DD1;
if ($MM < $MM1) {
    $MM += 12;
    $YY--;
}
$M = $MM - $MM1;
$Y = $YY - $YY1;
echo $Y . " YEARS " . $M . " MONTHS " . $D . " DAYS\n";
?>
