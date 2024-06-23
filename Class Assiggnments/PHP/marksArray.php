<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Roll Number</label>
        <input type="text" name="t1" id="" placeholder="Enter Roll number"><br><br>
        <input type="submit" value="Click here to call PHP ">
    </form>
</body>
</html>
<?php 
$marks= [23=>[95,98,96,88],30=>[95,99,96,85],36=>[95,92,96,80],35=>[95,88,96,88],75=>[95,88,96,88]];
$smarks=0;
// $roll=23;
$roll=$_GET["t1"];
foreach($marks as $k=>$v)
{
    if($k==$roll)
    {
        foreach($v as $t)
        {
            $smarks=$smarks+$t;
        }
    }
}
echo"<br>Sum of  marks of ". $n. " is ".$smarks;
?>