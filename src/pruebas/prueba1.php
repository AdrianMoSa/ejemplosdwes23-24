<?php
    $variable1=15;
    $variable2=30;

    $variable3=$variable1+$variable2;

    echo "El resultado de la suma es : $variable3";
    echo "<br>";
    echo "El resultado de la suma de $variable1 + $variable2 = $variable3";
    echo "<br>";
    echo 'El resultado de la suma de $variable1 + $variable2 = '.$variable3;
    echo "<br>";
    echo "El resultado de la suma de las dos variables es: ".$variable1+$variable2;

    if($variable1<$variable2){
        echo "La variable 1 es menor que la dos";
    }else if($variable1>$variable2){
            echo"La variable 2 es mayor que la 1";
        }else{
        echo "Las variables son iguales";
    }

    switch ($variable1) {
        case 10:
            echo "La variable tiene el valor de 10";
            break;
        default:
            echo "No es 10";

    }



    do{
        echo "esto es un bucle do-while";
        $variable1++;
    }while($variable1<100);

    while(true){
    echo "Adrian mola";
    break;
}

    for($i=0;$i<100;$i++){
        echo "El valor de la variable es $i";
    }