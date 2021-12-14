<?php

// Función que se encargar de llamar al sitio principal
function main()
{
    include('paraAlumno/vista/design.php');
}

// Función encargada de llamar a la base de datos
function mostrarAlimento()
{
    require_once('../models/conexion.php');
    $sql = 'SELECT * FROM alimentos';
    $query = $connect -> prepare($sql);
    $query -> execute();
    $result = $query -> fetchAll(PDO::FETCH_OBJ);

    if($query -> rowCount() > 0) {
        foreach($result as $result){
            echo "
            <tr>
            <td>".$result -> nombre."</td>
            <td>".$result -> energia."</td>
            <td>".$result -> grasatotal."</td>
            </tr>";
        }
    }
}

?>