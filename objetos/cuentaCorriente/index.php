<?php

include("./Classes/cuentaCorriente.php");

$test = new cuentaCorriente("Samuel Ramirez", "Y789123X");

$test->agregarDinero(100);
echo $test;

?>