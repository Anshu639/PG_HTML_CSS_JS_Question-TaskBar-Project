<?php
$I = 1;
$J = 2;
$K = 3;
echo "Groups of Three Successive Numbers
under 1000 <br>";
while ($K <= 998) {
    $L = $J**2;
    $M = $I*$K + 1;
    if ($L == $M) {
        echo "$I, $J, $K<br>";
    }
    $I += 1;
    $J += 1;
    $K += 1;
}
?>
