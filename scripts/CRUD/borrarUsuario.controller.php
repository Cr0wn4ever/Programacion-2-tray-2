<?php
require_once  "database.php";
require_once  "orm.class.php";
require_once  "Usuario.class.php";
$database = new Database();
$conexion = $database->getConexion();
$usuarioModel = new Usuario($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $usuarioModel->deleteById($id);
}
header('Location: ../../index.php');
exit();