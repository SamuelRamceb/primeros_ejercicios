<?php
if($_POST["pass"] == "z80"){
    session_start();
} else {
    echo("no valido");
    header('login.php');
    exit;
}
?>