<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
// Task 1
    echo"Task 1: Dhananjay Pant<br>";

// Task 2
$a=100;
$b=200;

$result= $a + $b;
echo "Task 2: ".$result;

// Task 3
$t1="Welcome ";
$t2="UPES";

echo "<br>Task 3: ".$t1.$t2;

// Task 4

$marksarr=[10,20,30,40];
$sum=0;

echo"<br><br>Task 4:<br>";
echo"Using for loop";

for($i=0;$i<4;$i++)
{
    $sum=$sum+$marksarr[$i];
}
echo"<br>Sum of the Numbers are: ".$sum;

echo"<br><br>Using for Each";

$sum1=0;
foreach($marksarr as $t)
{
    $sum1=$sum+$t;
}

echo"<br>Sum of the Numbers are: ".$sum;


// Task 5
echo"<br><br>Task 5:";

$myarr= [23=>"Jay",30=>"Akansha",36=>"Amit",35=>"Khushi",75=>"Aakash"];
$roll=23;

foreach($myarr as $m=>$n)
{
    if($m==$roll)
    {
        echo "<br>Roll Number  is: ".$n;
    }
}


// Task 6
echo"<br><br>Task 6:";

$marks= [23=>[95,98,96,88],30=>[95,99,96,85],36=>[95,92,96,80],35=>[95,88,96,88],75=>[95,88,96,88]];
$smarks=0;
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
</body>
</html>