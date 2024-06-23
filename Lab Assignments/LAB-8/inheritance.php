<?php
class User {
    private $username;
   
    public function setUsername($name) 
    {
      $this -> username = $name;
    }
        
    public function getUsername()
    {
      return $this -> username;
    }  
  }
  class Admin extends User{
    public function sayHello()
    {
      return "Hello admin, " . $this -> getUsername();
    }
  }    
  $admin1 = new Admin();
  $admin1 -> setUsername("anshu");
  echo $admin1 -> sayHello();
?>