<?php
// Ejercicio 01
// -------------------- problema a -------------------------------------
/*  Declarar  un  array  de  números  decimales  de  nombre  $importe  e  introducir  en  él  los  siguientes 
número:  32.583,  11.239,  45.781,  22.237.  Calcular  la  media,  mostrar  el  mayor  y,  por  último, 
mostrar la posición del importe menor.  */

$importe = array(32.583, 11.239, 45.781, 22.237);

function media($a)
{
    $media = 0;
    // se suman todos los elementos en la variable media
    foreach ($a as $x) {
        $media += $x;
    }
    // se divide la suma de todos los elementos entre el tamaño del array
    $media /= sizeof($a);
    // se retorna el resultado para ser impreso por pantalla
    return $media;
}

function mayor($a)
{
    return max($a);
}

function menor_pos($a)
{
    return array_search(min($a), $a);
}

echo ("<h2>Problema A</h2>");
echo ("<p>Declarar  un  array  de  números  decimales  de  nombre  \$importe  e  introducir  en  él  los  siguientes 
número: 32.583, 11.239, 45.781, 22.237.  Calcular  la  media,  mostrar  el  mayor  y,  por  último, 
mostrar la posición del importe menor.</p>");
echo ("<strong>Resultado 1: </strong> " . media($importe) . "<br>");
echo ("<strong>Resultado 2: </strong>" . mayor($importe) . "<br>");
echo ("<strong>Resultado 3: </strong>" . menor_pos($importe) . "<br>");

// ------------------------- problema b -------------------------------------
/*  Declarar  un  array  de  booleanos  de  nombre  $confirmado  e  introducir  en  él  seis  elementos  que 
sean: true, true, false, true, false, false. A continuación, mostrar por pantalla el elemento con índice 0. 
Por último, visualizar el número de elementos con valor “false”.  */

$confirmado = array(true, true, false, true, false, false);

/* Retorna el valor de la posición $n pasada por parametro */
function devolver_pos($a, $n)
{
    foreach ($a as $key => $value) {
        if ($key == $n) {
            return $value;
        }
    }
}
/* Rertorna la cantidad de elementos $b que encuentre en el array */
function cont_elements($a, $b)
{
    $count = 0;

    foreach ($a as $key => $value) {
        if ($value == $b) {
            $count += 1;
        }
    }

    return $count;
}
echo ("<h2>Problema B</h2>");
echo ("<p>Declarar  un  array  de  booleanos  de  nombre  \$confirmado  e  introducir  en  él  seis  elementos  que 
sean: true, true, false, true, false, false. A continuación, mostrar por pantalla el elemento con índice 0. 
Por último, visualizar el número de elementos con valor “false”.</p>");
echo ("<strong>Resultado 1: </strong>" . devolver_pos($confirmado, 0) . "<br>");
echo ("<strong>Resultado 2: </strong>" . cont_elements($confirmado, false) . "<br>");

// ---------------------------- problema C ------------------------------------
/* Declarar un array de cadenas de nombre $coches e introducir en él 5 marcas de coches. Visualizar 
en pantalla la marcha del coche con índice X. A continuación, mostrar el número de elementos del 
array  $coches.    Después,  visualizar  todos  los  coches  existentes  en  el  array  cada  uno  de  ellos  en 
una  línea.  Visualizar  también  todos  los  coches  existentes  en  el  array,  en  orden  descendente,  sin 
ordenar  el  array.  Por  último,  mostrar  la  frase  “El  concesionario  dispone  de  marca1,  marca2, 
marca3, marca4 y marca5”. */

$coches = array("BMW", "Audi", "Fiat", "Ford", "Lexus");

// Mostrar la marcha del coche $n pasado por parametro
function coche_x($a, $n)
{
    // Si el valor de la clave es igual al parametro pasado dentro de la función, retorna dicho valor
    foreach ($a as $key => $value) {
        if ($key == $n) {
            return $value;
        }
    }
}


// Contar la cantidad total de coches que existen en el array
function total_coches($a)
{
    $cont = 0;
    foreach ($a as $i) {
        $cont += 1;
    }

    return $cont;
}


// Visualizar todos los coches existentes en el array
function coches($a)
{
    $string = "";
    foreach ($a as $value) {
        $string .= "<br>" . $value;
    }
    return $string;
}


// Visualizar todos los coches existentes en el array de manera descendente
function coches_desc($a)
{
    $string = "";
    for ($i = sizeof($a) - 1; $i >= 0; $i--) {
        $string .= "<br>" . $a[$i];
    }
    return $string;
}

// Disponibilidad del consecionario
function disponible($a)
{
    $string = "El consecionario dispone de ";
    foreach ($a as $key => $value) {
        if ($key < sizeof($a) - 2) {
            $string .= $value . ", ";
        } else if ($key == sizeof($a) - 2) {
            $string .= $value . " y ";
        } else {
            $string .= $value;
        }
    }

    return $string;
}

echo ("<h2>Problema C</h2>");
echo ("<p>Declarar un array de cadenas de nombre \$coches e introducir en él 5 marcas de coches. Visualizar 
en pantalla la marcha del coche con índice X. A continuación, mostrar el número de elementos del 
array  \$coches.    Después,  visualizar  todos  los  coches  existentes  en  el  array  cada  uno  de  ellos  en 
una  línea.  Visualizar  también  todos  los  coches  existentes  en  el  array,  en  orden  descendente,  sin 
ordenar  el  array.  Por  último,  mostrar  la  frase  “El  concesionario  dispone  de  marca1,  marca2, 
marca3, marca4 y marca5”.</p>");
echo ("<strong>Resultado 1: </strong>" . coche_x($coches, 2) . "<br>");
echo ("<strong>Resultado 2: </strong>" . total_coches($coches) . "<br>");
echo ("<strong>Resultado 3: </strong>" . coches($coches) . "<br>");
echo ("<strong>Resultado 4: </strong>" . coches_desc($coches) . "<br>");
echo ("<strong>Resultado 5: </strong>" . disponible($coches) . "<br>");
