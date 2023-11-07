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
//print_r($sala1[$filaDeLaSala]);

function asignarButacasFila(int $numButacas, array $fila):string{
if(comprobarHuecosLibres($numButacas,$fila)==true){

}

return "Hola";
}

function comprobarHuecosLibres ( int $numButacas, array $fila):bool{
    $asientosReservas=$numButacas;
    $estaLibre=false;
   /* echo '<pre>';
    var_dump($fila);
    echo '</pre>';
    */
    $retorno=true;
    for ($i=0;$i<count($fila);$i++){
    if($fila[$i][2]==false&&$asientosReservas>0){
        $i+1;
        $asientosReservas--;
        echo "la fila ".$fila[$i][0]."con el asiento  ".$fila[$i][1]." Esta libre<br>";
    }else if($asientosReservas==0) {
        $estaLibre=true;
    }
    else if($asientosReservas>0){
        $estaLibre= false;
    }

    }
    return $estaLibre;
    //Coimprabar que haya el numero de butacas consecutivas libres
}
//asignarButacasFila(4,$sala1[$filaDeLaSala]);
echo comprobarHuecosLibres(4,$sala1[$filaDeLaSala]);