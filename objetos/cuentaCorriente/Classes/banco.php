<?php

class banco
{
    private $nombre;
    private $capital;
    private $direccion_central;

    // Constructores.
    function __construct()
    {
        $params = func_get_args();
        $numParams = func_num_args();

        $func_constructor = '__construct' . $numParams;

        if (method_exists($this, $func_constructor)) {
            call_user_func_array(array($this, $func_constructor), $params);
        }
    }

    function __construct1($nombre)
    {
        $this->nombre = $nombre;
        $this->capital = 5200000;
        $this->direccion_central = " ";
    }

    
    function __construct2($nombre, $direccion_central)
    {
        $this->nombre = $nombre;
        $this->capital = 5200000;
        $this->direccion_central = $direccion_central;
    }

    // Metodos.
    function modificarDireccion($dir)
    {
        $this->direccion_central = $dir;
    }
    
    function modificarCapital($capital)
    {
        $this->capital = $capital;
    }

    // Representación Información.
    function __toString()
    {
        return "Nombre: $this->nombre - Capital: $this->capital - Dirección Central: $this->direccion_central.";
    }
}
