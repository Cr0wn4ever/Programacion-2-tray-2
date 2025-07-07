<?php

require_once 'cliente.class.php';
require_once 'cuentaBanco.class.php';

$cliente1 = new Cliente("Juan", "Perez", "12345678");
$cliente2 = new Cliente("Maria", "Gomez", "87654321");

$cuentaBanco1 = new CuentaBanco("01020012345678901234", "ahorro", $cliente1, "1234", 115);
$cuentaBanco2 = new CuentaBanco("01020098765432109876", "corriente", $cliente2, "5678", 200);

$cuentaBanco3 = new CuentaBanco("01020011223344556677", "corriente", $cliente1, "4321", 350);
$cuentaBanco4 = new CuentaBanco("01020077665544332211", "ahorro", $cliente2, "8765", 50);

$cliente1->setCuenta($cuentaBanco1);
$cliente1->setCuenta($cuentaBanco3);
$cliente2->setCuenta($cuentaBanco2);
$cliente2->setCuenta($cuentaBanco4);

echo "<pre style='background: #f0f0f0; padding: 10px; border-radius: 5px; display: inline-block;'>";
print_r($cuentaBanco1);
print_r($cliente1);
echo "</pre>";
