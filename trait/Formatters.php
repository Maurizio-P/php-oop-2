<?php 

trait Formatters {
    public function toPascalCase($_value){
        return ucfirst($_value);
    }
}