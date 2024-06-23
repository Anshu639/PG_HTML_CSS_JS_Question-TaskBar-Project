<?php
class User {
  public $firstName;
 
  public function hello()
  {
    echo "hello, " .  $this -> firstName;

    return $this;
  }

  public function register()
  {
    echo " >> registered";
    return $this;
  }
 
  public function mail()
  {
    echo " >> email sent";
  }
}
 
$user1 = new User();
$user1 -> firstName = "Aakash";
 
$user1 -> hello() -> register() -> mail();
?>
