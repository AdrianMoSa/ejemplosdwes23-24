<?php
$arrayAleatorio=[];
for($i=0;$i<50;$i++) {
   $arrayAleatorio[$i]=random_int(0, 99);
}

for($i=0;$i<50;$i++) {
   echo "$arrayAleatorio[$i]<br>";
}