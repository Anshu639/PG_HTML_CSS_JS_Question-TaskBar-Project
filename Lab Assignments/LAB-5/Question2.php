<?php
echo "All Three Digit Armstrong Numbers:<br>";
for ($N = 100; $N <= 999; $N++) { 
    $S = 0; 
    $M = $N; 

    while ($M > 0) {
        $REM = $M % 10; 
        $S += $REM * $REM * $REM; 
        $M = (int)($M / 10); 
    }
    if ($S == $N) {
        echo $N . "<br>";
    }
}
?>
