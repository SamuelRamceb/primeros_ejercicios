<?php

foreach ($_FILES as $key => $value) {
    $uploaddir = '../ficha/fotoserver/';
    $uploadfile = $uploaddir . basename($_FILES[$key]['name'], ".jpg") . time() . ".jpg";

    if (move_uploaded_file($_FILES[$key]['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded." . "<br>";
    } else if ($_FILES[$key]['size'] == 0) {
        continue;
    } else {
        echo "Possible file upload attack!" . "<br>";
    }
}

// var_dump($_FILES);
