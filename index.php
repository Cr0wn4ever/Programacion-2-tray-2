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
            <p>Ahora que hemos usado el requiere_once para incluir nuestro primer script desde la carpeta scripts, podemos ejecutar su codigo interno desde este mismo index... Por ejemplo:</p>
        </div>
    </div>
</body>

</html>

<?php
require_once 'scripts\basicCommands.php';
require_once 'scripts\buclesBasicos.php';
?>