<?php

namespace ejercicios\clasesPrueba;
include_once "./Vehiculo.php";

class Coche extends Vehiculo
{
    protected int $puertas;

    /**
     * @param int $puertas
     */
    public function __construct(string $marca, string $modelo, int $anyo, int $puertas)
    {
        parent::__construct($marca, $modelo, $anyo);
        $this->puertas = $puertas;
    }

    public function getPuertas(): int
    {
        return $this->puertas;
    }

    public function setPuertas(int $puertas): void
    {
        $this->puertas = $puertas;
    }

    public function __toString(): string
    {
        return parent::__toString() . " tiene " . $this->getPuertas() . " puertas";
    }


}