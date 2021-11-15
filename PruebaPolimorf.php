<?php

//include "Empleado.php";

class PruebaPolimorf
{
    function calcular($empleado)
    {
        return "Los ingresos de " . $empleado->getApellido() . " son " . $empleado->ingresos();
    }
}
