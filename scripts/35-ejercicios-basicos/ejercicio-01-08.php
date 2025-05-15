<?php
/* en el siguiente ejercicio se verifica si un numero dado por el usuario es, o no, positivo. Asi como tambien
valida si el numero dado es 0 */

$test = 0;

echo '<br><hr>' . '<b>EJERCICIO 01: VERIFICAR QUE UN NUMERO ES POSITIVO</b>' . '<br>';

if ($test > 0) {
    echo $test . ' es positivo';
} elseif ($test == 0) {
    echo $test . ' El cero se considera un número neutro, ni positivo ni negativo';
} else {
    echo $test . ' no es positivo';
}
