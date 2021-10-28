<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><?php echo('Bienvenido ' . $_SESSION['datos']); ?></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>