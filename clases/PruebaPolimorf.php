<?php
use AsierOO\Empleado;
class PruebaPolimorf
{
    static function calcular(Empleado $empleado)
    {
        return "Los ingresos de " . $empleado->getApellido() . " son " . $empleado->ingresos();
    }
}
