<?php

require "./trait/Formatters.php";


class User {
    private $firstName;
    private $lastName;
    protected $discount;
    protected $cart = [];

    use Formatters;

    function __construct($_user)
    {   
        try{

            if (array_key_exists("firstName", $_user)) {
                $this->setFirstName($_user["firstName"]);
            }
        }catch(Exception $e){
            echo "Eccezione: " . $e->getMessage();
        }
        if (array_key_exists("lastName", $_user)) {
            $this->setLastName($_user["lastName"]);
        }

        $this->setCart($_user["cart"]);
        
    }

    public function setFirstName($_firstName){
        if (strlen($_firstName) > 3 ) {
            $this->firstName = $_firstName;
        }else{
            throw new Exception("Nome non valido. Numero di caratteri minimi: 3.");
        }
    }

    public function getFirstName(){
        return $this->firstName;
    }
    
    public function setLastName($_lastName){
        $this->lastName = $this->toPascalCase($_lastName);
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