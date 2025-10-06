<form action="./scripts/CRUD/registroUsuario.controller.php" method="POST">
    <fieldset>
        <legend>Registro de Usuario</legend>
        <label for="cedula">Cédula de identidad:</label>
        <input type="text" id="cedula" name="cedula" placeholder="cedula" required>
        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" placeholder="nombres" required>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" placeholder="apellidos" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="email" required>
        <label for="user_pass">Contraseña:</label>
        <input type="password" id="user_pass" name="user_pass" placeholder="contraseña" required>
        <button type="submit">Registrar</button>
    </fieldset>
</form>