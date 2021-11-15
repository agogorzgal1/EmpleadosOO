<?php
namespace AsierOO;
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
        return $ingresos;
    }

    function mostrar()
    {
        return parent::mostrar();
    }
}
