<?php

include_once '../controllers/AlimentosController.php';

$app = new AlimentosController('asd', 'asdasd'); //url, action

echo $app->renderViews('template', 'home'); //template, view


?>