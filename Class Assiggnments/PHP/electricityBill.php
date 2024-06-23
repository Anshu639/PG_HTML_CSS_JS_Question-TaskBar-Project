<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <h1>Electricity Bill Generator using PHP</h1>
    <form action="" method="get">
        <label for="bill">Enter the total number of units:</label>
        <input type="text" name="bill" id="bill">
        <input type="submit" value="Submit">
    </form>
    <?php
        $unit = $_GET["bill"];
        $amount = 0;

        if ($unit <= 50) {
            $amount = $unit * 3.50;
        } else if ($unit <= 150) {
            $amount = ($unit - 50) * 4.00 + 50 * 3.50;
        } else if ($unit <= 250) {
            $amount = ($unit - 150) * 5.20 + 100 * 4.00 + 50 * 3.50;
        } else {
            $amount = ($unit - 250) * 6.50 + 100 * 5.20 + 100 * 4.00 + 50 * 3.50;
        }
        echo "Your Total Billing for $unit units is: Rs. " . number_format($amount, 2);
    ?>
</body>
</html>
