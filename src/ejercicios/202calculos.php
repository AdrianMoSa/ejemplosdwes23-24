<?php
$variable1= $_GET['numero1'];
$variable2= $_GET['numero2'];

echo "la suma de los valores es: ".$variable1+$variable2."<br>";
echo "la resta de los valores es: ".$variable1-$variable2."<br>";
echo "la multiplicación de los valores es: ".$variable1*$variable2."<br>";
if($variable2==0) {
    echo "No se puede hacer la división entre 0";
}else{
    echo "la división de los valores es: " . $variable1 / $variable2;
}