<?php 
/* DETERMINAR SI UN NUMERO ES PAR */

echo '<br><hr>' . '<b>EJERCICIO 03: DETERMINAR SI UN NUMERO ES PAR</b>' . '<br>';

function EsPar($numero){
    if($numero%2==0){
        echo '<br>' . $numero . ' Es un numero par <br>';
    }else{
        echo '<br>' . $numero . ' No es un numero par <br>';
    }
}

EsPar(5);
EsPar(2);
EsPar(13);
EsPar(42);