<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>

            <tr>
                <td>Course</td>
                <td><input type="text" name="course" id="course"></td>
            </tr>

            <tr>
                <td>Roll No.</td>
                <td><input type="number" name="roll" id="roll"></td>
            </tr>

            <tr>
                <td>Marks</td>
                <td><input type="number" name="marks" id="marks"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit"></td>
            </tr>
        </table>

    </form>
</body>
</html>
<?php
          if(isset($_GET['name']) && isset($_GET['course'])&& isset($_GET['roll'])&&isset($_GET['marks']))
          {
            $uname=$_GET['name'];
            $ucourse=$_GET['course'];
            $Roll=$_GET['roll'];
            $Marks=$_GET['marks'];


            echo"<p> <strong>Name:</strong> $uname </p>";
            echo"<p> <strong>Course:</strong> $ucourse </p>";
            echo"<p> <strong>Roll:</strong> $Roll </p>";
            echo"<p> <strong>Marks:</strong> $Marks </p>";
          }   
?>
  