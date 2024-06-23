<?php
class User {
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function hello() {
        return "Hello, " . $this->firstName . " " . $this->lastName . " Good night!";
    }
}

$person = new User("Aakash", "Bhatt");
echo $person->hello();
?>
