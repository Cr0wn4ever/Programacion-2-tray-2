<?php

class Transaccion
{
    private $tipo;
    private $monto;
    private $fecha;

    public function __construct($tipo, $monto, $fecha)
    {
        $this->tipo = $tipo;
        $this->monto = $monto;
        $this->fecha = $fecha;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getMonto()
    {
        return $this->monto;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}