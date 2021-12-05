<?php

class Coche
{
    //Variables o atributos
    private $marca;
    private $modelo;
    private $color;
    private $propietario;
    private int $motor;

    function __construct($miMarca,$miModelo,$miColor,$miPropietario,$miMotor){

        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->propietario = $miPropietario;
        $this->motor = $miMotor;

    }

    //Funciones o métodos
    function setMarca($miMarca){

        $this->marca = $miMarca;

    }

    function getMarca(){

        return $this->marca;

    }

    function setModelo($miModelo){

        $this->modelo = $miModelo;

    }

    function getModelo(){

        return $this->modelo;

    }

    function setColor($miColor){

        $this->color = $miColor;

    }

    function getColor(){

        return $this->color;

    }

    function setPropietario($miPropietario){

        $this->propietario = $miPropietario;

    }

    function getPropietario(){

        return $this->propietario;

    }

    function setMotor($miMotor){

        $this->motor = $miMotor;

    }

    function getMotor(){

        return $this->motor;

    }
}