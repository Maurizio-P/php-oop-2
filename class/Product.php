<?php

class Product {
    public $title;
    public $type;
    public $price;
    public $infoProd = [];

    function __construct($_product)
    {
        $this->setTitle($_product["title"]);
        $this->setType($_product["type"]);
        $this->setPrice($_product["price"]);
        //$this->setInfo($_product["infoProd"]);
    }


    public function setTitle($_title){
        $this->title = $_title;
    }

    public function setType($_type){
        $this->type = $_type;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }
}
?>