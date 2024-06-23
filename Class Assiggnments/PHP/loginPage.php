<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      UserName: <input type="text" name="username" /><br /><br />
      Password: <input type="password" name="password" /><br /><br />
      <input type="submit" value="LogIn" />
    </form>
  </body>
</html>
<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // if ($username === 'MCA' && $password === 'MCAPWD') {      
    //     include('Welcome.html');
    // } else {  
    //     include('LoginPage.html');
    // }
    if ($username === 'akbhatt639@gmail.com' && $password === 'MCAPWD') {      
        header("Location:https://mail.google.com/mail/u/0/#inbox");
    } else {  
        include('LoginPage.html');
    }
}
?>
