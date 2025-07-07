<?php

class CuentaAhorro extends CuentaBanco
{
    private $interesAnual;

    public function __construct($numeroCuenta, $titular, $saldoInicial = 0, $interesAnual = 0.02)
    {
        parent::__construct($numeroCuenta, 'ahorro', $titular, $saldoInicial);
        $this->interesAnual = $interesAnual;
    }

    public function calcularInteres()
    {
        return $this->getSaldo() * $this->interesAnual;
    }

    public function aplicarInteres()
    {
        $interes = $this->calcularInteres();
        $this->depositar($interes);
    }
}