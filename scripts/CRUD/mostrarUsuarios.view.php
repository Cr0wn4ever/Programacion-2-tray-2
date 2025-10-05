<?php
require_once 'showall.controller.php';
?>

<h3>Usuarios Registrados:</h3>

<?php if (!empty($usuarios)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= htmlspecialchars($usuario->cedula) ?></td>
                    <td><?= htmlspecialchars($usuario->nombres) ?></td>
                    <td><?= htmlspecialchars($usuario->apellidos) ?></td>
                    <td><?= htmlspecialchars($usuario->email) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>