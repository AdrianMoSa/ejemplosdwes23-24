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

function asignarButacasFila(int $numButacas, array $fila):array{
    $asientosReservas=$numButacas;
if(comprobarHuecosLibres($numButacas,$fila)==true){
    for ($i=0;$i<count($fila);$i++){
        if($asientosReservas>0){
            $fila[$i][2]==true;
            $arrayAsientosOcupados[]=$fila[$i];
            $asientosReservas--;
        }
    }
}

return $arrayAsientosOcupados;
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
    if(!$fila[$i][2]&&$asientosReservas>0){
        $i+1;
        $asientosReservas--;
        //echo "la fila ".$fila[$i][0]."con el asiento  ".$fila[$i][1]." Esta libre<br>";
    }else if($asientosReservas==0) {
        $estaLibre=true;
    }
    else if($asientosReservas>0&&$fila[$i][2]){
        $estaLibre= false;
        $asientosReservas=$numButacas;
    }

    }
    return $estaLibre;
    //Coimprabar que haya el numero de butacas consecutivas libres
}

function mostrarAsientosOcupados(int $numbutacas, array $fila){
    $fila1[]=asignarButacasFila($numbutacas,$fila);

    foreach ($fila1 as $fila){
        echo "La fila ". $fila[0][0]." tiene estos asientos ocupados: <br>";
        foreach($fila as $filaCine){
            echo $filaCine[1]."<br>";
        }
    }
}
//asignarButacasFila(4,$sala1[$filaDeLaSala]);
//echo comprobarHuecosLibres(4,$sala1[$filaDeLaSala]);
//mostrarAsientosOcupados(4,$sala1[$filaDeLaSala]);

function indicesOrdenados($array):array{
    $contador=1;
    for($i=0;$i<count($array);$i++){
        if($i==0) {
            $arrayOrdenado[] = [count($array) / 2];
        }
        else if($i%2==0){
            $arrayOrdenado[] = [count($array)/2+$contador];
            $contador++;
        }
        else{
            $arrayOrdenado[] = [count($array)/2-$contador];
        }
    }
    return $arrayOrdenado;
}
$salaPrueba=indicesOrdenados($sala1);
/*
echo"<pre>";
var_dump($salaPrueba);
echo "</pre>";
*/


foreach ($salaPrueba as $sala){
    foreach($sala as $indice) {
        mostrarAsientosOcupados(4, $sala1[$indice]);
    }
}
