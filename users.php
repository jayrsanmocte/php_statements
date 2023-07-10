<?php
// class Users {
//     private $firstName;
//     private $middleName;
//     private $lastName;
//     private $address;
//     private $email;
//     private $contactNumber;
    
    
//     function setFirstName($value) {
//         $this-> firstName = $value;
//     }
// }

// $users = new Users();
// $users ->setFirstName("koigeto");

// echo $users->firstName;



class Users {
    private $firstName;
    private $middleName;
    private $lastName;
    private $address;
    private $email;
    private $contactNumber;
    
    function setFirstName($value) {
        $this->firstName = $value;
    }
    
    function getFirstName() {
        return $this->firstName;
    }
}

$users = new Users();
$users->setFirstName("koigeto");

echo $users->getFirstName();

?>