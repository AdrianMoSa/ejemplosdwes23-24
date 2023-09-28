<?php
    $variable1 = [];


    print_r($variable1);

    $variable1['pagoAgosto'] = 45;

    print_r($variable1);

    $variable1['pagoJulio'] = 4;

    echo "<br>";
    print_r($variable1);
    /*
    for($i=0;$i<13;$i++){
        echo $variable1[$i]."<br>";
    }
    */

    foreach ($variable1 as $elemento){
        echo $elemento."<br>";
    }

    echo "<br>";

    foreach ($variable1 as $clave=>$valor){
        echo "La posicion $clave tiene el valor $valor <br>";
    }

    $contactos['Paco']=array(
        'apellidos'=>'Deltell torregrosa',
        'edad'=>'40',
        'salario'=>2000.56,
        'asignaturas'=>array('LEMA','Base de datos','Redes')
    );
    $contactos['Inma']=[
        'apellidos'=>'Clemente',
        'edad' => 35,
        'dirección' => 'Los pirineos 25',
        'asignaturas' => ['FOL','EIE']
    ];

    $contactos['Juanjo']=47;

    var_dump($contactos);

    echo "<br>";

foreach ($contactos as $clave=>$valor) {
    echo "<br> La posicion $clave: ";
   if(is_array($valor)){
       foreach($valor as $claveInterna=>$valorInterno){
           if(is_array($valorInterno)){
               echo "La clave es: $claveInterna";
               foreach ($valorInterno as $asignatura){
                   echo "$asignatura";
               }
           }
           echo "$claveInterna ---------- $valorInterno <br>";
       }
   }else{
           echo "$valor";
       }

  }