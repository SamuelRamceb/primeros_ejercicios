<?php

$color = ["red;", "green;", "blue;"];

$test = setcookie("color", $color[rand(0, 2)], time() + 60 * 60);

echo '<h1 style="color:' . $_COOKIE["color"] . '">esto es una prueba</h1>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba de color</title>
</head>

<body>
    <?php

    echo ('<p style="color: ' . $_COOKIE["color"] . '">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus repellat 
    expedita ad adipisci iste esse, culpa, magni pariatur possimus nisi eius explicabo quia. Eveniet quas tempore quos fugiat 
    accusantium aspernatur!</p>')

    ?>
</body>

</html>