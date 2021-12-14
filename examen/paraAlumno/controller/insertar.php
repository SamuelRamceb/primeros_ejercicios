<?php

$nombre = $_POST['nombre'];
$energia = $_POST['energia'];
$proteina = $_POST['proteina'];
$hidratocarbono = $_POST['hc'];
$fibra = $_POST['fibra'];
$grasatotal = $_POST['grasa'];


agregarAlimento(array($nombre, $energia, $proteina, $hidratocarbono, $fibra, $grasatotal));

// Funcion para agregar otros alimentos
function agregarAlimento($array)
{
    require_once('../models/conexion.php');
    $sql = "INSERT INTO `alimentos` (`nombre`, `energia`, `proteina`, `hidratocarbono`, `fibra`, `grasatotal`) VALUES ('". $array[0] ."', '".$array[1]."', '".$array[2]."', '".$array[3]."', '".$array[4]."', '".$array[5]."') ";
    $query = $connect -> prepare($sql);
    $query -> execute();

    header('location: ../../index.php');
}

?>