<?php

require_once 'dbConex.php';
require_once 'orm.php';
require_once 'usuario.class.php';

Database::connect('mysql:host=localhost;dbname=yixondb', 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cedula = $_POST['cedula'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $user_pass = $_POST['user_pass'];

    $usuario = new Usuario($cedula, $nombres, $apellidos, $email, $user_pass);
    if ($usuario->save()) {
        $_SESSION['message'] = "Usuario registrado exitosamente.";
        header('Location: ../../index.php');
        exit();
    } else {
        $_SESSION['error'] = "Error al registrar el usuario.";
    }
}
