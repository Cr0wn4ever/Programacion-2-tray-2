<form action="./scripts/CRUD/registro.controller.php" method="POST">
    <fieldset>
        <legend>Registro de Usuario</legend>
        <label for="cedula">Cédula de identidad:<input type="text" name="cedula" placeholder="cedula" required></label>
        <label for="nombres">Nombres:<input type="text" name="nombres" placeholder="nombres" required></label>
        <label for="apellidos">Apellidos:<input type="text" name="apellidos" placeholder="apellidos" required></label>
        <label for="email">Email:<input type="email" name="email" placeholder="email" required></label>
        <label for="user_pass">Contraseña:<input type="password" name="user_pass" placeholder="contraseña" required></label>
        <button type="submit">Registrar</button>
    </fieldset>
</form>