<?php

require_once 'cliente.class.php';
require_once 'cuentaBanco.class.php';
require_once 'databaseTest.php';

function crearClientes()
{
    global $clientes; // Accede al arreglo importado desde databaseTest.php
    global $database; // Asegúrate de que $database esté definido en el ámbito global
    foreach ($clientes as $data) {
        $cliente = new Cliente($data['Nombres'], $data['Apellidos'], $data['Cedula']);
        $database["clientes"][] = $cliente;
    }
}

function crearCuenta($cedula, $clave)
{
    global $database;

    $bancos = ['0102', '0105', '0150'];
    $tiposDeCuenta = ['ahorro', 'corriente'];

    $numeroCuenta = $bancos[array_rand($bancos)] . str_pad(rand(0, 9999999999999999), 16, '0', STR_PAD_LEFT);

    foreach ($database["clientes"] as $cliente) {
        if ($cliente->getCedula() === $cedula) {
            $cuenta = new CuentaBanco($numeroCuenta, $tiposDeCuenta[array_rand($tiposDeCuenta)], $cliente, $clave);
            $cliente->setCuenta($cuenta);
            $database["cuentas"][] = $cuenta;
        }
    }
}


crearClientes();
crearCuenta('12345678', '1234');

echo "<pre style='background: #f0f0f0; padding: 10px; border-radius: 5px; display: inline-block; line-height: 2; font-size: 12px;'>";
print_r($database["clientes"]);
echo "</pre>";

