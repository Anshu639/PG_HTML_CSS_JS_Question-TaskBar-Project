<?php
class User {
  public $firstName;
  public $lastName;
 
  public function hello()
  {
    return "hello, " .  $this -> firstName;

  }
}
$user1 = new User();
 
$user1 -> firstName = "Aakash";
$user1 -> lastName = "Bhatt";
 

echo $user1 -> hello();
?>