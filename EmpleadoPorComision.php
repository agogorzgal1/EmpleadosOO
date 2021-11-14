<?php

// include "Empleado.php";

class EmpleadoPorComision extends Empleado
{
    private $horas;
    private $tarifa;
    private $base;

    function  __construct($nombre, $apellido, $numeroSeguridadSocial, $horas, $tarifa, $base)
    {
        $this->horas = $horas;
        $this->tarifa = $tarifa;
        $this->base = $base;
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
    }

    function setHoras($horas)
    {
        $this->horas = $horas;
    }

    function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    function setBase($base)
    {
        $this->base = $base;
    }

    function getHoras()
    {
        return $this->horas;
    }

    function getTarifa()
    {
        return $this->tarifa;
    }

    function getBase()
    {
        return $this->base;
    }

    function ingresos()
    {
        $ingresos = (intval($this->base) + intval($this->horas)) * intval($this->tarifa);
        return "<br>Los ingresos son " . $ingresos . "€.";
    }

    function mostrar()
    {
        return parent::mostrar() . " con la base de $this->base €, la tarifa siendo $this->tarifa € y habiendo trabajado $this->horas horas." . $this->ingresos();
    }
}
