<?php
function func10($test)
{
    if ($test % 4 == 0  && $test % 100 != 0 || $test % 400 == 0) {
        echo "<br><b>$test es un anio bisiesto</b><br>";
    } else {
        echo "<br>$test NO es un anio bisiesto<br>";
    }
}
echo "<hr><b><h2>FUNCION 10: Determinar si un anio es o no bisiesto.</b></h2><br>";

echo "<br><b>Ejecuando la funcion 'func10()' Obtenemos los siguiente:</b><br>";

func10(2024);
func10(2100);
func10(2000);
func10(2023);
func10(2002);
func10(2025);
func10(2010);
func10(1988);
func10(1992);
func10(1996);
