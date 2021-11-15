<?php

class Empresa
{
    private $empresa;

    function __construct()
    {
        $this->empresa = [];
    }

    function addEmpleado(Empleado $empleado)
    {
        $this->empresa[] = $empleado;
    }

    function listarEmpleados()
    {
        $lista = "";
        foreach ($this->empresa as $empleado) {
           $lista .= $empleado->mostrar() . "<br>";
        }
        return $lista;
    }

    function sumaIngresos()
    {
        $suma = 0;
        foreach ($this->empresa as $empleado) {
           $suma += $empleado->ingresos();
        }
        return $suma;
    }
}
