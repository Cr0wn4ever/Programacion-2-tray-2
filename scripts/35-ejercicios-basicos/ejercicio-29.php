<?php
/* Imprimir los números pares del 1 al 20*/
echo '<br><hr>' . '<b>EJERCICIO 23: Imprimir los números pares del 1 al 20</b>' . '<br>';

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 1) {
        echo "<br>$i";
    }
}
