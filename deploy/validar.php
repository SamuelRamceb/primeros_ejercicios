<?php
session_start();

setcookie('error', 0, time() + 60*5); 

if ($_POST["pass"] == "z80") {
  //if the pass is correct redirec to the app page
  $_SESSION['datos'] = $_POST["user"];
  header("location: app.php");
  exit;
} else {
  //else destroys the session
  setcookie('error', 1, time()+60*5);
  $_SESSION['datos'] = array();
  session_destroy();
  header("location: conexion.php");
  exit;
}
