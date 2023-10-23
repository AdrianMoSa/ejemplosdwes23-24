<?php

namespace Clases\Soportes;

class Cliente
{
public string $nombre;
private int $numero;
private  array $soportesAlquilados ;
private int $numSoportesAlquilados;
private int $maxAlquilerConcurrente;

    /**
     * @param string $nombre
     * @param int $numero
     * @param int $maxAlquilerConcurrente
     */
    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente =3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): void
    {
        $this->numero = $numero;
    }

    public function getNumSoportesAlquilados(): int
  {
        return count($this->soportesAlquilados);
    }
    public function tieneAlquilado(Soporte $s): bool{
        if (array_key_exists($s, $this->soportesAlquilados)) {
            return true;
        }
        return false;
    }
    public function alquilar(Soporte $s):bool{
        if($this->tieneAlquilado($s)||$this->getNumSoportesAlquilados()>$this->maxAlquilerConcurrente){
            return false;
        }else {
            $this->soportesAlquilados[] = $s;
            $this->numSoportesAlquilados++;
            return true;
        }
    }
    //Falta borrar esa posición del array y restar
    public function devolver (int $numSoporte):bool{
        foreach($this->soportesAlquilados as $soporte=>$valor){
            if($numSoporte==$soporte["numero"]){
                $this->numSoportesAlquilados--;
               return true;
            }
        }
        return false;
    }
}