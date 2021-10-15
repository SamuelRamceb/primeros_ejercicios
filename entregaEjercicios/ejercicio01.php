<?php

/* Arrays asociativos */
$fotografia = array(
    "foto1" => array(
        "orden" => 1,
        "autor" => "test",
        "titulo" => "titulo1",
        "ciudad" => "ciudad1",
        "url" => "url.jpg"
    ),
    "foto2" => array(
        "orden" => 2,
        "autor" => "test",
        "titulo" => "titulo2",
        "ciudad" => "ciudad1",
        "url" => "url.jpg"
    ),
    "foto3" => array(
        "orden" => 3,
        "autor" => "test",
        "titulo" => "titulo3",
        "ciudad" => "ciudad1",
        "url" => "url.jpg"
    )
);


vista($fotografia);


/* Función encargada de imprimir los datos del array */
function vista($array)
{
    foreach ($array as $foto => $info) {
        echo ('<table border="1"><thead>
        <th colspan="5">Info foto ' . $foto . '</th></thead>');
        echo ("<tbody><tr>");
        foreach ($info as $campo => $dato) {
            echo ("<td>" . $campo . ": " . $dato . "</td>");
        }
        echo ("</tr></tbody>");
        echo ('</table><br>');
    }
}
/* TODO */
function addPicture($array, $name)
{
}
