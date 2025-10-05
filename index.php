<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIC DEV | PHP ES BASURA MEJOR APRENDE JAVASCRIPT</title>
</head>

<body>
    <header>
        <span>VIC DEV</span>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#articulos">Artículos</a></li>
                <li><a href="#">Sobre mí</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <button type="button">APRENDER JAVASCRIPT</button>
    </header>
    <main>
        <section id="articulos">
            <h2>Artículos</h2>
            <ul>
                <li><a href="#php-sigue-usandose">¿PHP se sigue usando?</a></li>
                <li><a href="#por-que-php-es-considerado-obsoleto">¿Por qué PHP es considerado obsoleto?</a></li>
                <li><a href="#por-que-aprender-javascript">¿Por qué aprender JavaScript?</a></li>
                <li><a href="#">¿Qué buscan en un desarrollador fullstack?</a></li>
                <li><a href="#crud-basico-con-php">CRUD básico con PHP</a></li>
            </ul>
        </section>
        <hr>

        <article id="php-sigue-usandose">
            <h2>¿PHP se sigue usando?</h2>
            <p>
                PHP ha sido un pilar en el desarrollo web durante más de dos décadas. A pesar de las críticas y la aparición de nuevos lenguajes, su facilidad de uso, amplia documentación y gran comunidad lo mantienen relevante.
            </p>
        </article>
        <hr>
        <article id="por-que-php-es-considerado-obsoleto">
            <h2>¿Por qué PHP es considerado obsoleto?</h2>
            <p>
                A pesar de su popularidad, PHP ha sido objeto de críticas por su diseño y la falta de características modernas. Muchos desarrolladores argumentan que lenguajes como JavaScript, Python y Ruby ofrecen mejores paradigmas de programación y herramientas más avanzadas.
            </p>
        </article>
        <hr>
        <article id="por-que-aprender-javascript">
            <h2>¿Por qué aprender JavaScript?</h2>
            <p>
                JavaScript es el lenguaje de la web. Con el auge de las aplicaciones web y móviles, aprender JavaScript abre un mundo de oportunidades. Además, su sintaxis es amigable para principiantes y su versatilidad permite su uso en el frontend y backend.
            </p>
        </article>
        <hr>
        <article id="que-buscan-en-un-desarrollador-fullstack">
            <h2>¿Qué buscan en un desarrollador fullstack?</h2>
            <p>
                Un desarrollador fullstack debe tener habilidades tanto en el frontend como en el backend. Esto incluye conocimientos en HTML, CSS y JavaScript para el desarrollo del lado del cliente, así como experiencia en lenguajes de programación del lado del servidor como PHP, Python o Ruby. Además, es importante que comprendan bases de datos y APIs.
            </p>
        </article>
        <hr>
        <article id="crud-basico-con-php">
            <h2>CRUD básico con PHP</h2>
            <p>
                En este artículo, exploraremos cómo crear un CRUD (Crear, Leer, Actualizar, Eliminar) básico utilizando PHP y MySQL. Este es un concepto fundamental en el desarrollo web y te permitirá gestionar datos de manera efectiva.
            </p>
            <section>
                <header>
                    <h2>Formulario de registro</h2>
                </header>
                <?php require_once "./scripts/CRUD/registro.view.php" ?>
            </section>
            <section>
                <?php require_once "./scripts/CRUD/mostrarUsuarios.view.php" ?>
            </section>
        </article>
    </main>
</body>

</html>