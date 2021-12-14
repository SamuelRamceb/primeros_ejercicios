<?php

class Terrestre extends Vehiculos
{
    private $numero_ruedas;
    
    function __construct($matricula, $modelo, $numero_ruedas)
    {
        // calls the constructor
        parent::__construct($matricula, $modelo);     
        $this->numero_ruedas = $numero_ruedas;
    }
}