<?php

class cuentaCorriente
{
    private $saldo;
    private $limiteDescubierto;
    private $nombre;
    private $dni;
    private $banco;

    // Constructor cuenta corriente
    function __construct()
    {
        $params = func_get_args();
        $numParams = func_num_args();

        $func_constructor = '__construct' . $numParams;

        if (method_exists($this, $func_constructor)) {
            call_user_func_array(array($this, $func_constructor), $params);
        }
    }

    function __construct1($saldo)
    {
        $this->saldo = $saldo;
        $this->limiteDescubierto = 0;
        $this->nombre = "";
        $this->dni = "";
        $this->banco = "";
    }

    function __construct2($nombre, $dni)
    {
        $this->saldo = 0;
        $this->limiteDescubierto = 50;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->banco = "";
    }

    function __construct3($saldo, $limiteDescubierto, $dni)
    {
        $this->saldo = $saldo;
        $this->limiteDescubierto = $limiteDescubierto;
        $this->nombre = "";
        $this->dni = $dni;
        $this->banco = "";
    }

    // Agregar dinero a la cuenta corriente
    public function agregarDinero($monto)
    {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }

    // Sacar dinero de la cueenta
    public function sacarDinero($monto)
    {
        if (($this->saldo - $monto) >= ($this->limiteDescubierto * -1)) {
            $this->saldo -= $monto;
        } else {
            echo ("Error, no se ha podido realizar la operación");
        }
    }

    // Mostrar información de la cuenta corriente
    public function __toString()
    {
        return "Saldo de la cuenta: $this->saldo - Limite de descubierto: $this->limiteDescubierto - Nombre: $this->nombre - DNI: $this->dni - Banco: $this->banco.";
    }
}
