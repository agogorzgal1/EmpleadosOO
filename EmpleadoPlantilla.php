<?php

// include "Empleado.php";

class EmpleadoPlantilla extends Empleado
{
    private $sueldo;
    private $dietas;

    function  __construct($nombre, $apellido, $numeroSeguridadSocial, $sueldo, $dietas)
    {
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
        parent::__construct($nombre, $apellido, $numeroSeguridadSocial);
    }

    function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    function setDietas($dietas)
    {
        $this->dietas = $dietas;
    }

    function getSueldo()
    {
        return $this->sueldo;
    }

    function getDietas()
    {
        return $this->dietas;
    }

    function ingresos()
    {
        $ingresos = intval($this->sueldo) + intval($this->dietas);
        return "<br>Los ingresos son " . $ingresos . "€.";
    }

    function mostrar()
    {
        return parent::mostrar() . " con el sueldo de $this->sueldo € y las dietas siendo de $this->dietas €." . $this->ingresos();
    }
}