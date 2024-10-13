<?php
require_once 'Logueo.php';

$loguear = new Login($_POST['usuario'], $_POST['password']);

$validar = $loguear->validarLogin($_POST['usuario'], $_POST['password']);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($validar);