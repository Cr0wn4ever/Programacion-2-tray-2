<?php

function func8()
{
    for ($i = 1; $i <= 30; $i++) {
        if ($i % 7 == 0){
            echo "<br><b>En este caso se detiene el ciclo con un break, ya que econtramos que el numero siguiente ($i) es, en efecto, multiplo de 7.</b>";
            break;
        }
        echo "<br>$i";
    }
}

echo "<hr><b><h2>FUNCION 8: Imprimir los 30 primeros numeros pero deteniendo la ejecucion si encuentra un numero multiplo de 7.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func8()' Obtenemos los siguiente:</b><br>";

func8();
