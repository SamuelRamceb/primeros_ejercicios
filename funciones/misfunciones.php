<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Funciones</title>
</head>

<body>
    <?php

    $full_name = "";
    $a = 2;

    function potencias_de_2()
    {
        // cada que se invoque devuelve la siguiente potencia de 2
        // 2, 4, 8, 16, 32...
        global $a;
        return $a *= 2;
    }

    // función nombre completo
    function nombre_completo($a, $b, $c)
    {
        global $full_name;
        $full_name = $a . " " . $b . " " . $c;
        echo ("$full_name");
    }

    // imprimir etiquetas
    /* Debido a que las etiquetas son palabras reservadas por el navegador, requiere pasarcele entidades html
    a las cadenas para que puedan ser renderizads por el navegador.
    
    Otra opción es utlizar la función 'htmlspecialchars' que directamente hace la conversión por si mismo*/
    function imprimir_etiquetas_html($tag1, $tag2, &$tag3)
    {
        $tag3 = $tag1 . $tag2;
    }

    $tag = "";
    imprimir_etiquetas_html("<div>", "<a/>", $tag);
    echo htmlspecialchars($tag);

    // Funcion de Desayuno()
    function desayuno($str1, $str2, $str3 = "pero no tomo fruta")
    {
        if ($str3 == "pero no tomo fruta") {
            echo ("Hoy desayuno, $str1, $str2, $str3.<br>");
        } else {
            echo ("Hoy desayuno $str1, $str2 y $str3.<br>");
        }
    }

    ?>
</body>

</html>