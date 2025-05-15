<?php
/* Verificar si un usuario puede acceder a un sistema */
echo '<br><hr>' . '<b>EJERCICIO 09: Verificar si un usuario puede acceder a un sistema</b>' . '<br>';

$usersPasswords = array(
    "victor" => "v123",
    "Lsimp" => "L123",
    "admin" => "admin"
);

echo "<br><b>Estos serian los usuarios que estarian en nuestra base de datos: </b><br>";

foreach ($usersPasswords as $user => $pass) {
    echo "<br>Usuario: $user - Contrasena: $pass <br>";
}

function validateUser($username, $password, $DB_TEST)
{
    $validationToken = false;

    foreach ($DB_TEST as $user => $pass) {
        if ($username == $user && $password == $pass) {
            $validationToken = true;
            break;
        } else {
            $validationToken = false;
        }
    }

    return $validationToken;
}

echo "<br>Verifiquemos con un boolval() los siguientes usuarios y contrasenas: 'orientador1' - 'pass123', 'admin' - '123', 'admin' - 'admin', 'victor' - 'v123', 'Lsimp' - 'L123', 'usuario' - 'usuario'<br><b>Resultados:</b>
<br>"
    . (boolval(validateUser('orientador1', 'pass123', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . (boolval(validateUser('admin', '123', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . (boolval(validateUser('admin', 'admin', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . (boolval(validateUser('victor', 'v123', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . (boolval(validateUser('Lsimp', 'L123', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . (boolval(validateUser('usuario', 'usuario', $usersPasswords)) ? 'true' : 'false') . '<br>'
    . '<br><b>Se pueden observar distintos valores de tipo booleano, donde true significa que el usuario es valido, es decir, podria entrar en nuestro sistema, mientras que
    los resultados false son la representacion de usuarios que no estan presentes en la base de datos, por tanto no podrian entrar al sistema<br></b>';
