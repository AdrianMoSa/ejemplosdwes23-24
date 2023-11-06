<?php

$filas = 10;
$butacasPorFila=13;

function inicializarSala(int $filas, int $butacas):array
{
    for ($i = 0; $i < $filas; $i++) {
        for ($z = 0; $z < $butacas; $z++) {
            $sala[$i][$z] = [$i+1, $z+1, false];
        }
    }
    return $sala;
}
$sala1=inicializarSala($filas,$butacasPorFila);
$filaDeLaSala=intval(count($sala1)/2);
//var_dump($sala1[$filaDeLaSala]);
//utilizar count para contar  un array.
function asignarButacasFila(int $numButacas, array $fila):string{


return "Hola";
}

function comprobarHuecosLibres ( int $numButacas, array $fila):bool{
    $retorno=true;
    //Coimprabar que haya el numero de butacas consecutivas libres
}
asignarButacasFila(4,$sala1[$filaDeLaSala]);