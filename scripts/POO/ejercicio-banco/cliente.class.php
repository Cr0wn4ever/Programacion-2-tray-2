<?php

class Cliente
{
    private $nombre;
    private $apellido;
    private $cedula;
    private $cuentas;

    public function __construct($nombre, $apellido, $cedula, $cuentas = [])
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->cuentas = $cuentas;
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

    public function getCuentas()
    {
        return $this->cuentas;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCuenta($cuenta)
    {
        $this->cuentas[] = $cuenta;
    }
}
