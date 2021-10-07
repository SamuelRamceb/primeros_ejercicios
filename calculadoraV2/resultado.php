<?php

/* Variables extraidas por url */
$operando1 = $_GET['OPERANDO1'];
$operando2 = $_GET['OPERANDO2'];
$operacion = $_GET['OPERACION'];
$color = $_GET['ROJOS'];

/* Llamado a la función de la calculadora */
if (isset($operando1, $operando2, $operacion, $color)) {
    /* llamar a la versión sin negativos */
} else {
    /* llamar a la versión negativos */
}
calcula($operando1, $operando2, $operacion);

/* Funcionamiento de la calculadora */
/* function calcula($n1, $n2, $op, $red) */
{
    
    if(isset($n1, $n2, $op)){
        
        switch ($op) {
            case 'SUMA':
                echo (suma($n1, $n2));
                break;
            case 'RESTA':
                echo (resta($n1,$n2));
                break;
            case 'PRODUCTO':
                echo (multi($n1, $n2));
                break;
            case 'DIVISION':
                echo (division($n1, $n2));
                break;
            case 'CONCATENACION':
                echo(concatenacion($n1, $n2));
                break;
            default:
                echo ("error");
                break;
        }
    } else {
        echo ("hubo un error en los datos");
    }
}


/* Funciones */
function suma($n1, $n2)
{
    return $n1 + $n2;
}

function resta($n1, $n2)
{
    return $n1 - $n2;
}

function multi($n1, $n2)
{
    return $n1 * $n2;
}

function division($n1, $n2)
{
    return $n1 / $n2;
}

function concatenacion($n1, $n2)
{
    return $n1 . $n2;
}
