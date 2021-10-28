<?php
session_start();
if($_POST["pass"] == "z80"){
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];
    header('locaiton: app.php');
    exit;
} else {
    header('location: login.php');
    exit;
}
?>