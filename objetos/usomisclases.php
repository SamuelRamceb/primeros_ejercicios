<?php

    include('objeto.php');

    $lourdes = new Usuario('Lourdes', 'Izquierdo');

    echo $lourdes;


    $otroUser = new UsuarioTipo("Samuel", "SysAdmin");
    echo ("<br>");
    echo $otroUser;