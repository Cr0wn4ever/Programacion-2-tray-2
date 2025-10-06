<?php
require_once  "database.php";
require_once  "orm.class.php";
require_once  "Usuario.class.php";


$database = new Database();
$conexion = $database->getConexion();

$usuarioModel = new Usuario($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'cedula' => $_POST['cedula'],
        'nombres' => $_POST['nombres'],
        'apellidos' => $_POST['apellidos'],
        'email' => $_POST['email'],
        'user_pass' => password_hash($_POST['user_pass'], PASSWORD_BCRYPT),
    ];

    $usuarioModel->save($data);

    header('Location: ../../index.php');
    exit();
}