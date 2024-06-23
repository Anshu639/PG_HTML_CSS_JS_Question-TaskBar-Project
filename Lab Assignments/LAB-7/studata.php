<?php

$name = $_POST["name"];
$roll = $_POST["roll"];
$marks = $_POST["marks"];
$date = date('Y/m/d H:i:s');

$jsonFilePath = "StuData.json";
$file = fopen($jsonFilePath, "r");
$jsonContent = fread($file, filesize($jsonFilePath));
fclose($file);

$dataArray = json_decode($jsonContent, true);

$newData = array(
    "Name" => "$name",
    "Roll No" => $roll,
    "Marks" => $marks,
    "Timestamp" => "$date"
);

$dataArray[] = $newData;
$updatedJson = json_encode($dataArray, JSON_PRETTY_PRINT);
$file = fopen($jsonFilePath, "w");
fwrite($file, $updatedJson);

fclose($file);

echo "Data added successfully using file handling functions!";
?>
