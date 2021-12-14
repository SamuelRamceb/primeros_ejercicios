<?php

$nombre = $_POST['nombre'];

buscarNombre($nombre);

function buscarNombre($nombre)
{
    require_once('../models/conexion.php');
    $sql = "SELECT * FROM `alimentos` WHERE `nombre` LIKE '".$nombre."' ";
    $query = $connect -> prepare($sql);
    $query -> execute();
    $result = $query -> fetchAll(PDO::FETCH_OBJ);

    if($query -> rowCount() > 0) {
        foreach($result as $result){
            echo("
            <tr>
            <td>".$result -> nombre."</td>
            <td>".$result -> energia."</td>
            <td>".$result -> grasatotal."</td>
            </tr>");
        }
    } else {
        echo("<p>No se ha encontrado el resultado</p>");
    }
}


?>