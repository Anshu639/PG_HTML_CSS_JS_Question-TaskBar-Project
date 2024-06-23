<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 50px;
            color: #333;
        }
        h1 {
            color: #444;
            text-align: center;
            text-decoration: underline;
        }
        form {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            box-shadow: 0px 0px 20px #bbb;
            border-radius: 5px;
        }
        input[type="text"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            background-color: #000000;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 97%;
            opacity: 0.9;
        }
        input[type="submit"]:hover {
            opacity: 1;
            background-color: #4f4f4f;
        }
    </style>
</head>
<body>
    <h1>Electricity Bill Generator using PHP</h1>
    <form action="" method="get">
        <Label>Enter the Unit: </Label>
        <input type="text" name="bill">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $unit = $_GET["bill"];
    $amount = 0;
    if($unit <= 50){
        $amount = $unit * 3.50;
    } else if($unit <= 150){
            $amount = ($unit-50) * 3.50 + 50 * 3.50;
    } else if($unit <= 250){
            $amount = ($unit-150) * 5.20 + 100*4.00 +50*3.50;
    } else if($unit > 250) {
            $amount = ($unit-250) * 6.50 + 100 * 5.20 + 100 * 4.00 + 50 * 3.50;
    }      
    echo "Your Total Billing for $unit units is: $amount";
?>
