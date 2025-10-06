<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>VIC DEV | PHP ES BASURA MEJOR APRENDE JAVASCRIPT</title>
</head>

<body>
    <header class="header">
        <span class="logo"><STRONG>VIC DEV</STRONG></span>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#articulos">Artículos</a></li>
                <li><a href="#">Sobre mí</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <button type="button" class="button">APRENDER JAVASCRIPT</button>
    </header>
    <main>

        <aside id="articulos">
            <h2>Artículos</h2>
            <ul>
                <li><a href="#php-sigue-usandose">¿PHP se sigue usando?</a></li>
                <li><a href="#por-que-php-es-considerado-obsoleto">¿Por qué PHP es considerado obsoleto?</a></li>
                <li><a href="#por-que-aprender-javascript">¿Por qué aprender JavaScript?</a></li>
                <li><a href="#">¿Qué buscan en un desarrollador fullstack?</a></li>
                <li><a href="#crud-basico-con-php">CRUD básico con PHP</a></li>
            </ul>
        </aside>

        <div>
            <article id="php-sigue-usandose" class="articulo">
                <h2>¿PHP se sigue usando?</h2>
                <p>
                    PHP ha sido un pilar en el desarrollo web durante más de dos décadas. Su presencia en la web es innegable y su aprendizaje es algo que se debe de tomar en cuenta, ya que hablamos de una de las tecnologías en las que está basada la web.
                </p>
                <h5>Richard Ramirez</h5>
            </article>

            <article id="por-que-php-es-considerado-obsoleto" class="articulo">
                <h2>¿Por qué PHP es considerado obsoleto?</h2>
                <p>
                    A pesar de su popularidad, PHP ha sido objeto de críticas por su diseño y la falta de características modernas. Muchos desarrolladores argumentan que lenguajes como JavaScript, Python y Ruby ofrecen mejores paradigmas de programación y herramientas más avanzadas. Sobre todo si se trata de principiantes o personas que no hayan programado antes, PHP resulta engorroso y difícil de entender debido a su sintaxis y estructura, ya que la mayor parte de las veces resulta tan rígido que para el usuario novicio es más complejo, lo que podría causar frustración y posteriormente el abandono de la práctica de la programación.
                </p>
            </article>

            <article id="por-que-aprender-javascript" class="articulo">
                <h2>¿Por qué aprender JavaScript?</h2>
                <p>
                    JavaScript es el lenguaje de la web. Con el auge de las aplicaciones web y móviles, aprender JavaScript abre un mundo de oportunidades. Además, su sintaxis es amigable para principiantes y su versatilidad permite su uso en el frontend y backend. Esto significa que al aprender Javascript tienes las posibliidad de convertirte en un verdadero desarrollador fullstack, y además, uno muy completo, ya que las posibilidades de Js son infinitas. Este además es una de las tecnologías más solicitadas en el campo laboral debido a su versatilidad, por lo que dominar este lenguaje de programación casi te garantiza un empleo.
                </p>
            </article>

            <article id="que-buscan-en-un-desarrollador-fullstack" class="articulo">
                <h2>¿Qué buscan en un desarrollador fullstack?</h2>
                <p>
                    Un desarrollador fullstack debe tener habilidades tanto en el frontend como en el backend. Esto incluye conocimientos en HTML, CSS y JavaScript para el desarrollo del lado del cliente, así como experiencia en lenguajes de programación del lado del servidor como PHP, Python o Ruby. Además, es importante que comprendan bases de datos y APIs.
                </p>
            </article>

            <article id="crud-basico-con-php" class="articulo">
                <h2>CRUD básico con PHP</h2>
                <p>
                    En este artículo, exploraremos cómo crear un CRUD (Crear, Leer, Actualizar, Eliminar) básico utilizando PHP y MySQL. Este es un concepto fundamental en el desarrollo web y te permitirá gestionar datos de manera efectiva.
                </p>
                <br>
                <section class="listas">
                    <header>
                        <h2>Lista de todos los usuarios registrados</h2>
                    </header>
                    <?php
                    require_once "scripts/CRUD/listarUsuario.view.php";
                    ?>
                </section>
                <section>
                    <header>
                        <h2>Seccion de registro</h2>
                    </header>
                    <?php
                    require_once 'scripts/CRUD/registroUsuario.view.php';
                    ?>
                </section>
                <section>
                    <header>
                        <h2>Actualizacion de datos</h2>
                    </header>
                    <?php
                    require_once 'scripts/CRUD/modificarUsuario.view.php';
                    ?>
                </section>
                <section>
                    <header>
                        <h2>Demostracion de eliminacion de usuario</h2>
                    </header>
                    <?php
                    require_once 'scripts/CRUD/borrarUsuario.view.php';
                    ?>
                </section>
            </article>
        </div>
    </main>
</body>

</html>