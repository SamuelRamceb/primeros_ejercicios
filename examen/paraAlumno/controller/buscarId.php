<?php

$id = $_POST['id'];

buscarId($id);

function buscarId($id)
{
    require_once('../models/conexion.php');
    $sql = "SELECT * FROM `alimentos` WHERE `id` = ".$id." ";
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