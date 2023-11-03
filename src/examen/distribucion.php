<?php
$filas = $_POST['numeroFilas'];
$butacas= $_POST['numeroButacas'];
$compras=[];
$compras[0]=["Carlos Gonzalez",3];
$compras[1]=["Marisa Gimenez",4];
$arrayCine=[intval($filas),intval($butacas)];

function MostrarEntrada(array $compras)
{
    foreach ($compras as $compra){
        foreach ($compra as $numeroEntradas) {
        //echo $numeroEntradas;
        }
    }
}

/*
function rellenarCine($arrayCine){
    $arrayCine=[];
    for ($i=0;$i<=$arrayCine;$i++){
        for($j=1;$j<=$arrayCine[1];$j++){
        $arrayCine=[$i,$j];
        }
    }
    return $arrayCine;
}

function distribuirButacas(int $numero, int $filas, int $columnas){
    $arrayCine=[];
    $arrayentradas=[];
    for($i=0;$i<$filas;$i++){

    }
}

function mostrarButacas($arrayCine){
    echo "<table>";
    for ($i=0;$i<=$arrayCine[0];$i++) {
    echo "<tr>";
        for ($j = 0; $j <= $arrayCine[1]; $j++) {
            echo "<td>($j)</td>";
        }
        echo "</tr>";
    }
}
*/
mostrarButacas($arrayCine);