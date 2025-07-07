<?php

class CuentaBanco
{
    private $numeroCuenta;
    private $tipo; // Puede ser 'ahorro', 'corriente', etc.
    private $titular; // Referencia al objeto Cliente
    private $saldo;
    private $claveCajero;

    public function __construct($numeroCuenta, $tipo, $titular, $claveCajero, $saldoInicial = 0)
    {
        $this->numeroCuenta = $numeroCuenta;
        $this->tipo = $tipo;
        $this->titular = $titular;
        $this->claveCajero = $claveCajero;
        $this->saldo = $saldoInicial;
    }

    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function getClaveCajero()
    {
        return $this->claveCajero;
    }

    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function setClaveCajero($claveCajero)
    {
        $this->claveCajero = $claveCajero;
    }

    public function depositar($monto)
    {
        $this->saldo += $monto;
    }

    public function retirar($monto)
    {
        if ($monto <= $this->saldo) {
            $this->saldo -= $monto;
        } else {
            throw new Exception("Saldo insuficiente");
        }
    }

    public function transferencia($monto, $cuentaDestino)
    {
        $this->retirar($monto);
        return [
            'cuentaDestino' => $cuentaDestino,
            'monto' => $monto
        ];
    }
}
