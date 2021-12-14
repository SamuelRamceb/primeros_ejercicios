<?php

class Vehiculos
{
    private $matricula;
    private $modelo;

    // Constructor
    function __construct($matricula, $modelo)
    {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
    }

    // Returns a formmated String of the class
    function __toString()
    {
        return "$this->matricula, $this->modelo";
    }
}