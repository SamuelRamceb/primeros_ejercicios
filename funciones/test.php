<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Funciones</title>
</head>

<body>
    <h1>Prueba a Funciones de Argumentos</h1>
    <?php
    function p_variable()
    {
        $argc = func_num_args();
        $argv = func_get_args();
        for ($i = 0; $i < $argc; $i++) {
            echo "parametro $i: $argv[$i]<br>";
            // echo var_dump($argv);
        }
    }
    echo "Primera llamada: <br>";
    p_variable(1, 2);
    echo "Segunda llamada: <br>";
    p_variable("a", "b", "c", "d");
    ?>
</body>

</html>