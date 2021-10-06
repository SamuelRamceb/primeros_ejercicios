<?php
/* Apartado para crear el array y generar sus 30 datos aleatoreos */
$temperaturas = array_fill(0, 30, 0);

for ($i = 0; $i < sizeof($temperaturas); $i++) {
    $temperaturas[$i] = rand(-5, 35);
}

/* Función para imprimir todos los datos de los días del array */
function temperaturaDelMes($array)
{
    foreach ($array as $key => $value) {
        echo (($key + 1) . " de Septiembre: " . $value . "º<br/>");
    }
}

/* Función para calcular la media de las temperaturas de todo el array */
function calcularMedia($array)
{
    $media = 0;
    foreach ($array as $value) {
        $media += $value;
    }
    // Calcular la media con bcdiv para poder establecer cuantos decimales mostrar
    return bcdiv($media, sizeof($array), 2);
}

/* Calcular temperatura máxima del mes y día o días en las que estuvo presente */
function temperaturasAltas($array)
{
    $max = max($array);
    echo ($max . " ha sido la temperatura máxima, en los días: <br/>");
    foreach ($array as $key => $value) {
        if ($value == $max) {
            echo (($key + 1) . " de Septiembre<br/>");
        }
    }
}

/* Calcular el minimo de temperaturas del mes y el día o días en los que estuvo presente */
function temperaturasBajas($array)
{
    $min = min($array);
    echo ($min . " ha sido la temperatura más baja, en los días: <br/>");
    foreach ($array as $key => $value) {
        if ($value == $min) {
            echo (($key + 1) . " de Septiembre<br/>");
        }
    }
}

/* Calcular los días en los que se superó la media de la temperatura */
function mediaSuperada($array)
{
    $media = calcularMedia($array);
    foreach ($array as $key => $value) {
        if ($value > $media) {
            echo ("El día " . ($key + 1) . " de Septiembre se superó la medía de temperatura con " . $value . "º<br/>");
        }
    }
}
/* 
Outputs
*/

echo temperaturaDelMes($temperaturas) . "<br/><hr/>";
echo "<b>La media de la temepratura en el mes: </b>" . calcularMedia($temperaturas) . "<br/><hr/>";
echo temperaturasAltas($temperaturas) . "<br/><hr/>";
echo temperaturasBajas($temperaturas) . "<br/><hr/>";
echo mediaSuperada($temperaturas) . "<br/>";

