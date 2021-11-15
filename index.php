<?php
include "clases/Empleado.php";
include "clases/EmpleadoPlantilla.php";
include "clases/EmpleadoPorComision.php";
include "clases/PruebaPolimorf.php";
include "clases/Empresa.php";

use AsierOO\EmpleadoPlantilla;
use AsierOO\EmpleadoPorComision;

$emp1 = new EmpleadoPlantilla("Asier", "Gogorza", "2812345678", 1000, 200);
$emp2 = new EmpleadoPlantilla("Eunate", "Ibarrola", "2812345622", 1200, 300);
$resultado = "<b>Empleado:</b><br><br><b>EmpleadoAsalariado:</b><br>";
$resultado .= $emp1->mostrar() . "<br>Los ingresos " . $emp1->ingresos() . "<br><br>";
$resultado .= $emp2->mostrar() . "<br>Los ingresos " . $emp2->ingresos();

$emp3 = new EmpleadoPorComision("Asier", "Gogorza", "2812345678", 6, 50, 300);
$emp4 = new EmpleadoPorComision("Eunate", "Ibarrola", "2812345622", 5, 50, 300);
$resultado .= "<br><br><b>EmpleadoPorComisión:</b><br>";
$resultado .= $emp3->mostrar() . "<br>Los ingresos " . $emp3->ingresos() . "<br><br>";
$resultado .= $emp4->mostrar() . "<br>Los ingresos " . $emp4->ingresos();

$emp5 = new EmpleadoPlantilla("Asier", "Gogorza", "2812345678", 1000, 200);
$emp6 = new EmpleadoPorComision("Eunate", "Ibarrola", "2812345622", 5, 50, 300);
$prueba = new PruebaPolimorf();
$resultado .= "<br><br><b>Prueba Polimorfismo:</b><br>";
$resultado .= $prueba->calcular($emp5) . "<br>";
$resultado .= $prueba->calcular($emp6);

$emp7 = new EmpleadoPlantilla("Asier", "Gogorza", "2812345678", 1000, 200);
$emp8 = new EmpleadoPorComision("Eunate", "Ibarrola", "2812345622", 5, 50, 300);
$emp9 = new EmpleadoPlantilla("Leire", "Agirre", "2812345624    ", 1000, 200);
$empresa = new Empresa();

$empresa->addEmpleado($emp7);
$empresa->addEmpleado($emp8);
$empresa->addEmpleado($emp9);

$resultado .= "<br><br><b>Listado Empresa:</b><br>";
$resultado .= $empresa->listarEmpleados() . "<br><br>";
$resultado .= "<b>La suma total de ingresos es: </b>" . $empresa->sumaIngresos();

include "vistas/vista_resultado.php";