<?php
abstract class User {
    private $username;
    abstract public function stateYourRole();

    public function setUsername($name){
        $this->username=$name;
    }
    public function getUsername(){
        return $this ->username;
    }
}
class Admin extends User{
    public function stateYourRole(){
        return "admin";
    }
}
class Viewer extends User{
    public function stateYourRole(){
        return "viewer";
    }
}
$admin1=new Admin();
$admin2=new Viewer();
$admin1->setUsername("anshu");
$admin2->setUsername("bhatt");
echo $admin1->stateYourRole();
echo"\n";
echo $admin2->stateYourRole();

?>