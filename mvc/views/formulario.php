<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="../controllers/crear_sesion.php" method="post">
        <label for="user">Usuario:</label>
        <input type="text" name="user" id="user">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
    </form>
</body>
</html>