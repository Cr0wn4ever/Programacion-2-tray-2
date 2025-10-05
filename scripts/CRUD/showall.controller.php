<?php
require_once 'dbConex.php';
require_once 'orm.php';
require_once 'usuario.class.php';

Database::connect('mysql:host=localhost;dbname=yixondb', 'root', '');

$usuarios = [];

$usuarios = Usuario::all();
