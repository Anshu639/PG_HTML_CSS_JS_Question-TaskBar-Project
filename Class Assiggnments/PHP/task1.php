<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1</title>
</head>
<body>
    <form action="" method="get">
      <fieldset>
        <table >
            <tr>
                <td>Name:</td> 
                <td><input type="text" name="name"></td>

            </tr>

            <tr>
                <td>Gender:</td>
                <td>Male <input type="radio" name="gender" id="male" value="male">
                Female<input type="radio" name="gender" id="female" value="female"></td>
            </tr>

            <tr>
                <td>Adress:</td>
                <td><textarea name="address" id="" cols="20" rows="5"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="" id=""></td>
            </tr>
        </table>
      </fieldset>
    </form>
<?php   
            $uname=$_GET['name'];
            $ugender=$_GET['gender'];
            $address=$_GET['address'];
            echo"<p> <strong>Name:</strong> $uname </p>";
            echo"<p> <strong>Gender:</strong> $ugender </p>";
            echo"<p> <strong>Address:</strong> $address</p>";       
?>
</body>
</html>