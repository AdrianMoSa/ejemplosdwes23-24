<?php
namespace ejercicios\clasesPrueba;
class Vehiculo
{
protected String $marca;
protected String $modelo;
protected int $anyo;

    /**
     * @param String $marca
     * @param String $modelo
     * @param int $anyo
     */
    public function __construct(string $marca, string $modelo, int $anyo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anyo = $anyo;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function setMarca(string $marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getAnyo(): int
    {
        return $this->anyo;
    }

    public function setAnyo(int $anyo): void
    {
        $this->anyo = $anyo;
    }


    public function __toString(): string
    {
      return "el vehiculo con marca ".$this->getMarca()." y modelo ".$this->getModelo()." fabricado en el año ".$this->getAnyo();

    }


}