<?php
$edad=$_GET['edad'];
$date = date("Y");
echo "Dentro de 10 años tendras".($edad+10)."y sera el año".($date+10)." hace 10 años tenias".($edad-10)."y era el año ".($date-10)."<br>";
echo "Te jubilarás en el año ".(($date+65)-$edad);
