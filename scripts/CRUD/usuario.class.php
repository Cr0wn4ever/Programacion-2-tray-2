<?php
class Usuario extends ORM
{
    public function __construct(PDO $conexion)
    {
        parent::__construct('id', 'usuarios', $conexion);
    }
}
