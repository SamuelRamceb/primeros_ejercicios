<?php

$uploaddir = '../ficha/fotoserver/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']) . time();

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}