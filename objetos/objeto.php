<?php

/* Clase usuario */
class Usuario
{
    /* Definir atributos */
    public $apellido;
    public $nombre;
    protected $idioma = "es_ES";
    private $fcreacion;

    /* Definir métodos */

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fcreacion = time();
    }

    /* Destructor */
    public function __destruct()
    {
        echo ("<p>Eliminando $this->apellido</p>");
    }

    // Método impresion
    public function __toString()
    {
        return "Usuario: $this->nombre $this->apellido - {$this->formatearFecha()}";
    }

    // Creando formato de fecha
    public function formatearFecha()
    {
        setlocale(LC_TIME, $this->idioma);
        return strftime('%c', $this->fcreacion);
    }

    // Modificar idioma
    public function definirIdioma($idioma)
    {
        $this->idioma = $idioma;
    }
}


// Clase hija
class UsuarioTipo extends Usuario
{
    private $tipo;

    // Constructor
    public function __construct($nombre, $tipo)
    {
        parent::__construct($nombre, "Apellido");
        $this->tipo = $tipo;
    }

    // Visualizar
    public function getTipo()
    {
        return $this->tipo;
    }

    // toString
    public function __toString()
    {
        $res = parent:: __toString() . " - " . $this->tipo;
        // return "Usuario: $this->nombre $this->apellido ";
        return $res;
    }
}
