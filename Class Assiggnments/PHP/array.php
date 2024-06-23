<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="get">
      <fieldset>
        <label for="">Enter the Roll</label><br />
        <input type="text" name="roll" /><br /><br />
        <input type="submit" />
      </fieldset>
    </form>
  </body>
</html>
<?php
$roll = $_GET["roll"];

$data_arr = [
    1 => ["John Doe", "four", 75, "male"],
    2 => ['John Wick', "eight", 89, "male"],
    3 => ["Angel Piya", "fifth", 85, "female"],
    4 => ["Supnakha", "first", 85, "female"]
];

$flag = 1;
foreach ($data_arr as $k => $v) {
    if ($k == $roll) {
        $flag = 0;
        echo "<br>Name is " . $v[0];
        echo "<br>Class is " . $v[1];
        echo "<br>Marks is " . $v[2];
        echo "<br>Gender is " . $v[3];
        break;
    }
}

if ($flag) {
    echo "$roll is not present";
}
?>
