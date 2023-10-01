<?php
$personas=[];
$personas['Paqui']=array(
    'altura'=>172,
    'edad'=>20,
    'correo'=>'asdf1234@gmail.com'
);

$personas['Manuela']=array(
    'altura'=>153,
    'edad'=>60,
    'correo'=>'asdfg12345@gmail.com'
);

$personas['Vicenta']=array(
    'altura'=>156,
    'edad'=>72,
    'correo'=>'asdfgh123456@gmail.com'
);

$personas['Eustaquia']=array(
    'altura'=>153,
    'edad'=>80,
    'correo'=>'asdfghi1234567@gmail.com'
);

$personas['Rodolfina']=array(
    'altura'=>146,
    'edad'=>102,
    'correo'=>'asdfghij12345678@gmail.com'
);

foreach ($personas as $persona=>$valor){
    echo "$persona<br>";
        foreach ($valor as $claveInterna => $valorInterno) {
            echo "$claveInterna ---------- $valorInterno <br>";
        }
}