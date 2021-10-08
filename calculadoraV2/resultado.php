<?php

/* Variables extraidas por url */
$operando1 = $_GET['OPERANDO1'];
$operando2 = $_GET['OPERANDO2'];
$operacion = $_GET['OPERACION'];
$color = $_GET['ROJOS'];

/* Llamado a la función de la calculadora */
if (isset($operando1, $operando2, $operacion, $color)) {
    calcula($operando1, $operando2, $operacion, $color);
} else if (isset($operando1, $operando2, $operacion)) {
    calcula($operando1, $operando2, $operacion);
} else {
    echo ("error en los datos!");
}


function calcula($n1, $n2, $op, $red)
{
    switch ($op) {
        case 'SUMA':
            echo (suma($n1, $n2));
            break;
        case 'RESTA':
            echo (resta($n1, $n2));
            break;
        case 'PRODUCTO':
            echo (multi($n1, $n2));
            break;
        case 'DIVISION':
            echo (division($n1, $n2));
            break;
        case 'CONCATENACION':
            echo (concatenacion($n1, $n2));
            break;
        default:
            echo ("error");
            break;
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
