<?php
session_start();

//when's called close the session and returns to the login form
$_SESSION = array();
session_destroy();
header('location: conexion.php');
exit;
