<?php

require_once "./class/User.php";

    class UserPrime extends User {
        public $prime;
        private $primeDiscount = 50;
        function __construct($_user)
        {
            parent::__construct($_user);
            $this->prime = $_user["prime"];
        }

        public function setDiscount(){
            $this->discount = $this->primeDiscount;
        }

        public function getDiscount() {
            return $this->discount;
        }
    }

?>