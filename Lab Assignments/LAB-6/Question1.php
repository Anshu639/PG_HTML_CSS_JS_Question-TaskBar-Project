<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    #calculator {
      width: 300px;
      margin: 20px auto;
      border: 2px solid #ccc;
      border-radius: 5px;
      padding: 10px;
      background-color: #f9f9f9;
    }
    input[type="number"],
    input[type="text"],
    input[type="submit"],.result {
      width: 100%;
      margin-bottom: 10px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      cursor: pointer;
      background-color: black;
      color: white;
      border: none;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div id="calculator">
    <h1>Simple Calculator</h1>
    <form action="" method="post">
      <?php
      $first_num = isset($_POST['first_num']) ? $_POST['first_num'] : '';
      $second_num = isset($_POST['second_num']) ? $_POST['second_num'] : '';
      $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
      $result = '';
      if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
          case "Add":
            $result = $first_num + $second_num;
            break;
          case "Subtract":
            $result = $first_num - $second_num;
            break;
          case "Multiply":
            $result = $first_num * $second_num;
            break;
          case "Divide":
            if ($second_num != 0) {
              $result = $first_num / $second_num;
            } else {
              $result = "Cannot divide by zero";
            }
            break;
        }
      }
      ?>
      <input type="number" name="first_num" required="required" placeholder="First Number" value="<?php echo $first_num; ?>" />
      <input type="number" name="second_num" required="required" placeholder="Second Number" value="<?php echo $second_num; ?>" />
      <input class="result" readonly="readonly" name="result" placeholder="Result" value="<?php echo $result; ?>" />
      <input type="submit" name="operator" value="Add" />
      <input type="submit" name="operator" value="Subtract" />
      <input type="submit" name="operator" value="Multiply" />
      <input type="submit" name="operator" value="Divide" />
    </form>
  </div>
</body>
</html>
Qu