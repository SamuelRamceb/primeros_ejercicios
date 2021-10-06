<?php
function precio_envio($total_compra, $tipo_compra)
{
    $precio_envio = "error";
    if (isset($total_compra, $tipo_compra)) {
        if ($total_compra < 19) {
            if ($tipo_compra == "mascota") {
                $precio_envio = "no se puede realizar el envio";
            } else {
                $precio_envio = "los gastos de envio son 9€";
            }
        } else if ($total_compra <= 40) {
            $precio_envio = "los gastos de envio son 9€";
        } else if ($total_compra <= 200) {
            $precio_envio = "los gastos de envio son 9€";
        } else {
            $precio_envio = "Su codigo de descuento es: CODIGODESC33";
        }
    } else {
        // En caso de fallo retorna error
        echo ($precio_envio);
    }
    // Retorna el precio del envio o código de descuento
    echo ($precio_envio);
}

// Recibir data por la url
$total_compra = $_GET["importe"];
$tipo_compra = $_GET["tipo_compra"];

// Llamar a la función y pasar datos por parametros
precio_envio($total_compra, $tipo_compra);