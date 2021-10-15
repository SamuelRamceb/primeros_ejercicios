<?php

/*Almacenar en un array de 6 elementos números no repetidos entre el 1 y el 49. Visualizarlos posteriormente.  */

$array = [];

for ($i = 0; $i < 6; $i++) {
    $num = rand(1, 49);
    if(in_array($num, $array)){
        $i --;
    } else {
        array_push($array, $num);
    }
}

/* Muestra el contenido del array */
foreach ($array as $value) {
    echo ($value. " ");
}
