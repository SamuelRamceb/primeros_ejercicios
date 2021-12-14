<?php
session_start();

if (!ctype_space($_POST['nombre']) && ctype_upper($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    echo ($_SESSION['nombre']);
} else {
    header('location: pagina1.php');
    exit;
}



