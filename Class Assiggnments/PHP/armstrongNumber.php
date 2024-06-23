<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<body>
    <h1>Armstrong number using PHP</h1>
    <form action="" method="get">
        <label for="bill">Enter the number :</label>
        <input type="text" name="num" id="bill">
        <input type="submit" value="Submit">
    </form>
    <?php
        $num = $_GET["num"];
        $temp=$num;
        $rem=0;
        $sum=0;
        while($num>0){
            $rem=$num%10;
            $sum=$sum+($rem*$rem*$rem);
            $num=(int)($num/10);
        }
        if($sum==$temp){
            echo $temp." is a armstrong number";
        }else{
        echo $temp. " is not a armstrong number";
        }
    ?>
</body>
</html>
