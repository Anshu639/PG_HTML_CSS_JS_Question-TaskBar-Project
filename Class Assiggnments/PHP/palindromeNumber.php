<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <h1>Palendrome number using PHP</h1>
    <form action="" method="get">
        <label for="bill">Enter the number :</label>
        <input type="text" name="num" id="bill">
        <input type="submit" value="Submit">
    </form>
    <?php
        $num = $_GET["num"];
        $temp=$num;
        $rev=0;
        while($num>0){
            $rem=$num%10;
            $rev=$rev*10+$rem;
            $num=(int)($num/10);
        }
        if($rev==$temp){
            echo $temp." is a palendrome number";
        }else{
            echo $temp. " is not a palendrome number";
        }
    ?>
</body>
</html>
