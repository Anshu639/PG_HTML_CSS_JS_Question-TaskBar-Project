<?php
interface User{
    public function setUsername($username);
    public function getUsername();
    
    public function setGender($gender);
    public function getGender();
}
class Commentator implements User{
    private $username='';
    private $gender='none of your business!';
   
  public function setUsername($name)
  {
    $this -> username = (is_string($name))? $name : 'N/A';
  }
 
  public function getUsername()
  {
    return $this -> username;
  } 
 
  
  public function setGender($gender)
  {
    $gendersArray = array('female', 'male', 'other');
 
    if(in_array($gender, $gendersArray))
    {
      $this -> gender = $gender;
    } 
  }
 
  public function getGender()
  {
  return $this -> gender;
  }
}
function addMrOrMrsToUsername(User $user)
{
  $userName   = $user -> getUsername();
  $userGender = $user -> getGender();
  
  if($userGender === 'female')
  {
    return "Mrs. " . $userName;
  }
  else if($userGender === 'male')
  {
    return "Mr. " . $userName;
   }
        
  return $userName;
}
$user1 = new Commentator();
$user1 -> setUsername("Undefined ");
$user1 -> setGender("female");
echo addMrOrMrsToUsername($user1);
 
$user2 = new Commentator();
$user2 -> setUsername("Aakash");
$user2 -> setGender("male");
echo addMrOrMrsToUsername($user2);
?>