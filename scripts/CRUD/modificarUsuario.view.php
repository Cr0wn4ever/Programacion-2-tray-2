<form action="./scripts/CRUD/modificarUsuario.controller.php" method="POST">
    <fieldset>
        <legend>Modificar Usuario</legend>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" placeholder="#43" required>
        <label for="cedula">Cédula de identidad:</label>
        <input type="text" id="cedula" name="cedula" placeholder="cedula">
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" placeholder="nombres">
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" placeholder="apellidos">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="email">
        <label for="user_pass">Contraseña:</label>
        <input type="password" id="user_pass" name="user_pass" placeholder="contraseña">
        <button type="submit">Actualizar</button>
    </fieldset>
</form>