<?php
require_once "listarUsuario.controller.php";

if (count($usuarios) > 0) {
    echo "<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>";
    foreach ($usuarios as $usuario) {
        echo "<tr>
                <td>{$usuario['id']}</td>
                <td>{$usuario['cedula']}</td>
                <td>{$usuario['nombres']}</td>
                <td>{$usuario['apellidos']}</td>
                <td>{$usuario['email']}</td>
              </tr>";
    }
    echo "  </tbody>
        </table>";
} else {
    echo "<p>No hay usuarios registrados.</p>";
}