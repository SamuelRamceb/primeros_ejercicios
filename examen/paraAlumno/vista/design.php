<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="paraAlumno/web/css/estilo.css" />
    <title>Información Alimentos</title>
</head>
<body>
    <div id="cabecera">
        <h1>Alimentos. Información nutricional</h1>
    </div>

    <div id="menu">
        <hr/>
        <a href="">Inicio</a> |
        <a href="paraAlumno/vista/mostrarAlimentos.php">Consultar alimentos</a> |
        <a href="paraAlumno/vista/formInsertar.php">Insertar alimento</a> |
        <a href="paraAlumno/vista/buscarPorNombre.php">Buscar alimento (por nombre)</a> |
        <a href="paraAlumno/vista/buscarId.php">Buscar alimento (por código)</a>
        <hr/>
    </div>

    <div id="contenido">
       <?php include('paraAlumno/vista/inicio.php'); ?> 
    </div>

    <div id="pie">
        <hr/>
        <div style="text-align:center;">DWES. Creado por "Samuel E. Ramirez C.". Curso 2021/22</div>
    </div>
</body>
</html>