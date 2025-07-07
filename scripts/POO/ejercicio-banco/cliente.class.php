<?php

class Cliente
{
    private $nombre;
    private $apellido;
    private $cedula;
    private $cuenta;

    public function __construct($nombre, $apellido, $cedula)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function getCuenta()
    {
        return $this->cuenta;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCuenta($cuenta)
    {
        $this->cuenta = $cuenta;
    }
}
