<form action="./scripts/CRUD/modificarUsuario.controller.php" method="POST">
    <fieldset>
        <legend>Modificar Usuario</legend>
        <label for="id">ID:<input type="text" name="id" placeholder="id" required></label>
        <label for="cedula">Cédula de identidad:<input type="text" name="cedula" placeholder="cedula"></label>
        <label for="nombres">Nombres:<input type="text" name="nombres" placeholder="nombres"></label>
        <label for="apellidos">Apellidos:<input type="text" name="apellidos" placeholder="apellidos"></label>
        <label for="email">Email:<input type="email" name="email" placeholder="email"></label>
        <label for="user_pass">Contraseña:<input type="password" name="user_pass" placeholder="contraseña"></label>
        <button type="submit">Actualizar</button>
    </fieldset>
</form>