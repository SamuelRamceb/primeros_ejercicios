<?php
/* 
Guardar en dos arrays la dirección de las imagenes tanto de chicas como de chicos
*/
// Array Chicas
$array_chicas = array(
    "assets/chicas/chica_1.jpg",
    "assets/chicas/chica_2.jpg",
    "assets/chicas/chica_3.jpg",
    "assets/chicas/chica_4.jpg",
    "assets/chicas/chica_5.jpg"
);
// Array Chicos
$array_chicos = array(
    "assets/chicos/chico_1.jpg",
    "assets/chicos/chico_2.jpg",
    "assets/chicos/chico_3.jpg",
    "assets/chicos/chico_4.jpg",
    "assets/chicos/chico_5.jpg"
);

/* 
Función Matching
recibiendo como parametro dos cadenas con la ruta de las imagenes de tanto el chico como la chica (ya elegidas al azar)
se encarga de cargarlas dentro de una etiqueta <img> para mostrarla en el navegador
 */
function matching($chico, $chica)
{
    echo('<img src="'.$chico.'" width="350" height="480"> <img src="'.$chica.'" width="350" height="480">');
}

/* 
Se utiliza la función 'array_rand()' que nos retorna una key al azar de un array dado, dicha clave se la pasamos
al array original y las mismas a la funcion que se encargará de cargar dichas rutas en una etiqueta <img>
*/
matching($array_chicos[array_rand($array_chicos)], $array_chicas[array_rand($array_chicas)]);