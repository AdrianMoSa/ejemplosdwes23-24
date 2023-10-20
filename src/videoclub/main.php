<?php
include_once "./Clases/Soportes/Soporte.php";
include_once "./Clases/Soportes/CintaVideo.php";
include_once "./Clases/Soportes/Dvd.php";
include_once "./Clases/Soportes/Juego.php";

use Clases\Soportes\Soporte;
use Clases\Soportes\Dvd;
use Clases\Soportes\Juego;
use Clases\Soportes\CintaVideo;


$soporte1= new Soporte("Batman",1);
$soporte2 = new CintaVideo("El resplandor",2,104,6);
$soporte3 = new Dvd("Jungla de cristal",3, "ES-EN","16:9",8);
$soporte4 = new Juego("Diablo IV",4, "Pc",2,2,50);
$soporte1->muestraResumen();
echo "<br>";
$soporte2->muestraResumen();
echo "<br>";
$soporte3->muestraResumen();
echo "<br>";
$soporte4->muestraResumen();
echo "<br>";
