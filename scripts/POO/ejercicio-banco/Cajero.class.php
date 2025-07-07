<?php

class Cajero
{
    private $cuenta;
    private $clave;

    public function __construct($cuenta, $clave)
    {
        $this->cuenta = $cuenta;
        $this->clave = $clave;
    }

    public function Retirar($monto)
    {
        if ($this->clave === $this->cuenta->getClaveCajero()) {
            $this->cuenta->retirar($monto);
        } else {
            throw new Exception("Clave incorrecta");
        }
    }

    public function ConsultarSaldo()
    {
        if ($this->clave === $this->cuenta->getClaveCajero()) {
            return $this->cuenta->getSaldo();
        } else {
            throw new Exception("Clave incorrecta");
        }
    }

    public function CambiarClave($nuevaClave)
    {
        if ($this->clave === $this->cuenta->getClaveCajero()) {
            $this->cuenta->setClaveCajero($nuevaClave);
            $this->clave = $nuevaClave;
        } else {
            throw new Exception("Clave incorrecta");
        }
    }
}
