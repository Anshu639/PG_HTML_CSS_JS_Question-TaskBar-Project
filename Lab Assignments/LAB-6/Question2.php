<?php
function transposeMatrix($matrix) {
    $transposed = [];
    $rows = count($matrix);
    $cols = count($matrix[0]);
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $transposed[$i][$j] = $matrix[$j][$i];
        }
    }
    
    return $transposed;
}
function printMatrix($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            echo $matrix[$i][$j] . "\t";
        }
        echo "<br>";
    }
}
$originalMatrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "Original Matrix:<br>";
printMatrix($originalMatrix);
$transposedMatrix = transposeMatrix($originalMatrix);
echo "\nTransposed Matrix:<br>";
printMatrix($transposedMatrix);
?>
