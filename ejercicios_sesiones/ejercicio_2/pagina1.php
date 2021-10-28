<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>

<body>
    <p>Ingrese 1 nombre y en MAYUS</p>
    <form action="enviar()" method="post">
        <input type="text" name="nombre" id="nombre">
    </form>
    <?php

    function enviar()
    {
        if (!ctype_space($_POST['nombre']) && ctype_upper($_POST['nombre'])) {
            $_SESSION['nombre'] = $_POST['nombre'];
            header('location: pagina2.php');
            exit;
        } else {
            header('location: pagina1.php');
            exit;
        }
    }

    ?>
</body>

</html>