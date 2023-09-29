<?php
$arrayRespuestas=["Si","No","No tendrás tanta suerte","Prueba de nuevo en otra vida"];
$respuesta=$_POST["pregunta"];

$totalPosiciones=count($arrayRespuestas);
$randomRespuesta=random_int(0,$totalPosiciones);
echo "<h1>$respuesta</h1><br>";
echo "<h2>$arrayRespuestas[$randomRespuesta]";

