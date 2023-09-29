<?php
$arrayAleatorio = [];
$numeroMaximo=0;
$numeroMinimo=100;
$acumulador=0;
$media=0;
for ($i = 0; $i < 33; $i++) {
    $arrayAleatorio[$i] = random_int(0, 100);
    if($arrayAleatorio[$i]>$numeroMaximo){
        $numeroMaximo=$arrayAleatorio[$i];
    }
    if($arrayAleatorio[$i]<$numeroMinimo){
        $numeroMinimo=$arrayAleatorio[$i];
    }
    $acumulador+=$arrayAleatorio[$i];

}
$media=$acumulador/35;
for ($i = 0; $i < 33; $i++) {
    echo "$arrayAleatorio[$i]<br>";
}

echo "<h1>El numero mas alto es el $numeroMaximo, el numero mas bajo es $numeroMinimo y la media es de $media</h1>";