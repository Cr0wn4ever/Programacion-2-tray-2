<?php
/* Calcular el costo total de una compra*/
echo '<br><hr>' . '<b>EJERCICIO 18: Calcular el costo total de una compra</b>' . '<br>';


$DB_TEST = array(
    "120" => 2,
    "60" => 3,
    "5" => 4,
    "0.40" => 8,
    "1.5" => 6
); // precio => cantidad

$total = 0;

foreach ($DB_TEST as $precio => $cantidad) {
    echo "<br><b>Precio = $precio - Cantidad: $cantidad ===> " . (float) $precio * $cantidad . "</b><br>";
    $total += (float) $precio * $cantidad;
}

echo "<br><b><u>Total a pagar: $total</u></b><br>";
