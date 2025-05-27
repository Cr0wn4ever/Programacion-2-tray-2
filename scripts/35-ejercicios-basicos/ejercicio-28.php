<?php
/* Calcular el descuento en una compra*/
echo '<br><hr>' . '<b>EJERCICIO 23: Calcular el descuento en una compra</b>' . '<br>';

$carrito = array(
    "arina PAN" => 30.00,
    "leche" => 60.00,
    "mantequilla" => 25.25
);

//solo para comprobar los nuevos precios.
echo "<br><b>Carrito original:</b><br>";
foreach ($carrito as $product => $price) {
    echo "<br>$product => $price<br>";
}

//aplicando solo el 10%
foreach ($carrito as $product => $price) {
    $carrito[$product] = $price - ($price * 0.1);
}


//solo para comprobar los nuevos precios.
echo "<br><b>Carrito despues del 10% de descuento en productos</b><br>";
foreach ($carrito as $product => $price) {
    echo "<br>$product => $price<br>";
}


//verificando el total de la compra para el descuento del 20% en la compra total
$totalPagar = array_sum($carrito);
echo "<br><b>Total a pagar: $totalPagar</b><br>";

if ($totalPagar > 100) {
    $totalPagar = $totalPagar - ($totalPagar * 0.2);
    echo "<br><h2>Es usted un gran cliente!</h2><b>Nuevo total a pagar (DESCUENTO DE 20%): $totalPagar</b><br>";
}
