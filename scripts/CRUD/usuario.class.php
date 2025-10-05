<?php

class Usuario extends Model
{

    protected static string $table = 'usuarios'; // Nombre de la tabla en la base de datos

    public $cedula;
    public $nombres;
    public $apellidos;
    public $email;
    public $user_pass;

    public function __construct($cedula = null, $nombres = null, $apellidos = null, $email = null, $user_pass = null)
    {
        $this->cedula = $cedula;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->user_pass = $user_pass;
    }
}
