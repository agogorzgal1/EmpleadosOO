<?php
abstract class Empleado
{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    function  __construct($nombre, $apellido, $numeroSeguridadSocial)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    function setNumeroSeguridadSocial($numeroSeguridadSocial)
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellido()
    {
        return $this->apellido;
    }

    function getNumeroSeguridadSocial()
    {
        return $this->numeroSeguridadSocial;
    }

    function mostrar()
    {
        return "Está empleado $this->nombre $this->apellido con el NSS: $this->numeroSeguridadSocial";
    }

    abstract function ingresos();
}
