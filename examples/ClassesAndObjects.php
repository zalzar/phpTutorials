<?php
// // http://localhost/Tuts/examples/ClassesAndObjects.php
// //Classes - Part 1

// class User
// {
//     public $usEmail;
//     public $usName;

//     public function __construct($usName, $usEmail)
//     {
//         // $this->email=' '.'ali@xoload.com';
//         // $this->name=' '.'Ali';

//         $this->email = ' ' . $usEmail;
//         $this->name = ' ' . $usName;
//     }

//     public function login()
//     {
//         echo $this->name . ' logged in.';
//     }
// }

// // $userOne = new User();

// // $userOne->login();
// // echo $userOne->email;

// $userTwo = new User('Rali', 'Rali@gmail.com');
// // echo $userTwo->name;
// // echo $userTwo->email;
// $userTwo->login();


// http://localhost/Tuts/examples/ClassesAndObjects.php
//Classes - Part 2

class User
{
    private $email;
    private $name;

    public function __construct($name, $email)
    {

        $this->email = ' ' . $email;
        $this->name = ' ' . $name;
    }

    public function login()
    {
        echo $this->name . ' logged in.';
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        if((is_string($name)) && (strlen($name) > 2)) {
            $this->name = $name;
            return "the name is updated to $name";
        } else {
            return 'not a valid name!';
        }
    }
}

$userTwo = new User('Rali', 'Rali@gmail.com');
// $userTwo->name = 50;
// echo $userTwo->name;
//echo $userTwo->getName();
echo $userTwo->setName('Ali');
