<?php

require_once "./class/Product.php";

class ProductType extends Product{

    protected $memory;
    protected $screen;

    function __construct($_product){
        parent::__construct($_product);
        $this->setMemory($_product["type"]);
        $this->setScreen($_product["title"]);
    }

    public function setMemory($_type){
        if ($_type === "electronics") {
            $this->memory = 32;
        }
    }

    public function setScreen($_title){
        if ($_title === "smartphone") {
            $this->screen = 6;
        }
        else if($_title === "TV") {
            $this->screen = 55;
        }
    }

    public function getMemory(){
        return $this->memory;
    }

    public function getScreen(){
        return $this->screen;
    }
}

?>