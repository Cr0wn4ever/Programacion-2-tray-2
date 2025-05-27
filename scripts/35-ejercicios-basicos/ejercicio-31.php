<?php
/* Imprimir los primeros 10 números de la serie Fibonacci*/
echo '<br><hr>' . '<b>EJERCICIO 31: Imprimir los primeros 10 números de la serie Fibonacci</b>' . '<br>';

$fibonacci = [];

for ($i = 0; $i <= 10; $i++) {
    if ($i < 2) {
        array_push($fibonacci, $i);
    } else {
        array_push($fibonacci, ($fibonacci[$i - 1] + $fibonacci[$i - 2]));
    }
}

echo "<br><b>Los 10 primeros numeros de la serie fibonacci: ";

foreach ($fibonacci as $fib) {
    echo " $fib ";
}
