<?php
class User {
    private $firstName;

    public function setFirstName($str)
    {
      $this -> firstName = $str;
    }

    public function getFirstName()
    { 
      return $this -> firstName;
    }
  }
   
  $user1 = new User();
  $user1 -> setFirstName("Aakash");
  echo $user1 -> getFirstName();
?>
