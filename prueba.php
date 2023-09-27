<?php
class Perro{
    public $raza;
    public $edad;

    function __construct($raza,$edad){
        $this->raza = $raza;
        $this->edad = $edad;
    }




}

$paco = new Perro("pepé",8);
?>