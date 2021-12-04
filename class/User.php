<?php

require_once "./class/UserPrime.php";

class User {
    private $firstName;
    private $lastName;
    protected $discount;
    protected $cart = [];

    function __construct($_user)
    {
        if (array_key_exists("firstName", $_user)) {
            $this->setFirstName($_user["firstName"]);
        }
        if (array_key_exists("lastName", $_user)) {
            $this->setLastName($_user["lastName"]);
        }

        $this->setCart($_user["cart"]);
        
    }

    public function setFirstName($_firstName){
        $this->firstName = $_firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }
    
    public function setLastName($_lastName){
        $this->lastName = $_lastName;
    }
    public function getLastName(){
        return $this->lastName;
    }

    public function getCompleteName(){
        return $this->firstName . " " . $this->lastName;
    }

    public function setCart($_cart){
        $this->cart = $_cart;
    }

    public function pushCart($_object){
        $this->cart[] = $_object;
    }

}

?>