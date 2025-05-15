<?php
/* Comprobar si una contraseña tiene al menos 8 caracteres (Se puede hacer de dos formas, pero prefiero la segunda)*/
echo '<br><hr>' . '<b>EJERCICIO 05: Comprobar si una contraseña tiene al menos 8 caracteres (Para este ejercicio tambien valide un maximo de 15 caracteres)</b>' . '<br>' .
    'Esto se puede hacer de dos formas: <br>
A) Usando la funcion strlen() para verificar la longitud de la cadena de caracteres que conforman la contrasena <br>
B) Usando una expresion regular (\'/^.{8,15}$/\') para lograr el mismo resultado <br>
Lo mas usado para validar contrasenas en scripts mas complejos son las expresiones regulares, pero para este caso concreto donde solo se precisa validar que la contrasena tenga mas de 8 caracteres, no es realmente necesaria ya que se puede usar strlen() <br>';

function validPass($pass)
{
    if (strlen($pass) >= 8 && strlen($pass) <= 15) {
        echo '<br>' . $pass . ' Es una contrasena valida <br>';
    } else {
        echo '<br>' . $pass . ' NO es una contrasena valida <br>';
    }
}

function validPassRegEx($pass)
{
    $partern = '/^.{8,15}$/';

    if (preg_match($partern, $pass)) {
        echo '<br>' . $pass . ' Es una contrasena valida <br>';
    } else {
        echo '<br>' . $pass . ' NO es una contrasena valida <br>';
    }
}

echo '<br><b>if (strlen($pass) >= 8 && strlen($pass) <= 15)</b><br>';
validPass('3sVal1d4*01*');
validPass('N0v4Lid');

echo '<br><b>if (preg_match($partern, $pass))</b><br>';
validPassRegEx('3sVal1d4*01*');
validPassRegEx('N0v4Lid');
