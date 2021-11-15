<?php
include "Empleado.php";
include "EmpleadoPlantilla.php";
include "EmpleadoPorComision.php";
include "PruebaPolimorf.php";

$emp1 = new EmpleadoPlantilla("Asier", "Gogorza", "2812345678", 1000, 200);
$emp2 = new EmpleadoPlantilla("Eunate", "Ibarrola", "2812345622", 1200, 300);
$resultado = "<b>Empleado:</b><br><br><b>EmpleadoAsalariado:</b><br>";
$resultado .= $emp1->mostrar() . "<br><br>";
$resultado .= $emp2->mostrar();

$emp3 = new EmpleadoPorComision("Asier", "Gogorza", "2812345678", 6, 50, 300);
$emp4 = new EmpleadoPorComision("Eunate", "Ibarrola", "2812345622", 5, 50, 300);
$resultado .= "<br><br><b>EmpleadoPorComisión:</b><br>";
$resultado .= $emp3->mostrar() . "<br><br>";
$resultado .= $emp4->mostrar();

$emp5 = new EmpleadoPlantilla("Asier", "Gogorza", "2812345678", 1000, 200);
$emp6 = new EmpleadoPorComision("Eunate", "Ibarrola", "2812345622", 5, 50, 300);
$prueba = new PruebaPolimorf();
$resultado .= "<br><br><b>Prueba Polimorfismo:</b><br>";
$resultado .= $prueba->calcular($emp5) . "<br>";
$resultado .= $prueba->calcular($emp6);

include "vistas/vista_resultado.php";
