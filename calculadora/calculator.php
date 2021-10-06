<?php

$number1 = $_GET["input1"];
$number2 = $_GET["input2"];
$opera = $_GET["operacion"];

calcula($number1, $number2, $opera);

// funcion calculadora
function calcula($n1, $n2, $opera)
{
    // Verificamos si los datos que nos pasan son válidos
    if(isset($n1, $n2, $opera)){
        // Aprovechamos el switch para evaluar los resultados
        switch ($opera) {
            case 'suma':
                echo (suma($n1, $n2));
                break;
            case 'resta':
                echo (resta($n1,$n2));
                break;
            case 'multi':
                echo (multi($n1, $n2));
                break;
            case 'divi':
                echo (division($n1, $n2));
                break;
            default:
                echo ("error");
                break;
        }
    } else {
        echo ("hubo un error en los datos");
    }
}


// funciones matematicas
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