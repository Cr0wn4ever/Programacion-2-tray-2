<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing basic php comands and words</title>
</head>

<body>
    <div id="content">
        <div class="basic-commands">BASIC COMMANDS
            <hr>
            <br>
            <?php
            echo "La forma mas basica de insertar un script dentro de un index de php, es directamente con sus etiqutas de apertura y cierre (< ? php ? >), normalmente iria todo junto, pero por razones practicas se dejo por separado."
            ?>
            <br>
            <p><strong>Sin embargo, existe otra forma de agregar scripts de php al index, y es con el conocido Require once, con el cual se pueden importar scripts desde otras partes de repositorio. Por esta razon a partir de ahora lo hare de esa forma.</strong></p>
            <br>
            <p>Ahora que hemos usado el requiere_once para incluir nuestro primer script desde la carpeta scripts, podemos ejecutar su codigo interno desde este mismo index...</p>
        </div>
    </div>
</body>

</html>

<?php
//EJERCICIOS BASICOS

// require_once 'scripts\basicCommands.php';
// require_once 'scripts\buclesBasicos.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-01-08.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-02.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-03.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-04.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-05.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-06.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-07.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-09.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-10.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-11.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-12.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-13.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-14.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-15.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-16.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-17.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-18.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-19.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-20.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-21.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-22.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-23.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-24.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-25.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-26.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-27.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-28.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-29.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-30.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-31.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-32.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-33.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-34.php';
// require_once 'scripts\35-ejercicios-basicos\ejercicio-35.php';

//EJERCICIOS CON FUNCIONES
require_once 'scripts\ejercicios-funciones\funcion-01.php';
require_once 'scripts\ejercicios-funciones\funcion-02.php';
require_once 'scripts\ejercicios-funciones\funcion-03.php';


?>