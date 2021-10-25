<?php

$n_visita += $_COOKIE["visitas"];

$test = setcookie("visitas", $n_visita, time()+60*60);
$test = setcookie("hora", time(), time()+60*60);
$test = setcookie("fecha", date("Day Month Year"), time()+60*60);

echo($_COOKIE);

?>