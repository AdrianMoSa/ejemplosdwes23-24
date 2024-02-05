<?php


use ejercicios\clasesPrueba\Coche;
use ejercicios\clasesPrueba\Vehiculo;

include_once "./Coche.php";
include_once "./Vehiculo.php";

$vehiculo1 = new Vehiculo("Peugeot","206",1990);
$coche1= new Coche("Ferrari","450",2010,4);

echo $vehiculo1;
echo" <br>";
echo $coche1;