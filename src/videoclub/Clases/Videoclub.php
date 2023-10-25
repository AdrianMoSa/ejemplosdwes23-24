<?php

namespace videoclub\Clases;

use Clases\Soportes\CintaVideo;

class Videoclub
{
private string $nombre;
private array $productos;
private int $numProductos;
private array $socios;
private int $numSocios;

    public function __construct()
    {

    }

private function incluirProducto(){

}

public function incluirCintaVideo(string $titulo, float $precio, int $duracion){
        $cintaVideo= new CintaVideo($titulo,$precio,$duracion);
        $this->incluirProducto($cintaVideo);
}
}