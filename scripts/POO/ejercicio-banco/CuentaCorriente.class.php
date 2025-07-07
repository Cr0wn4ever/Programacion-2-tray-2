<?php

class CuentaCorriente extends CuentaBanco
{
    public function __construct($numeroCuenta, $titular, $saldoInicial = 0)
    {
        parent::__construct($numeroCuenta, 'corriente', $titular, $saldoInicial);
    }
}
