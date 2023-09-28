<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$anyo = $_POST['anyo'];
$telefono = $_POST['telefono'];

echo $nombre;


$salida = "<html>";
$salida.= "<head><title>Datos personales del usuario ".$_POST['nombre']."</title></head>";
$salida.="<body>
            <table>
            <tr>
            <td>Nombre</td><td>".$_POST['nombre']."</td>
</tr>
  <tr>
            <td>Apellidos</td><td>".$_POST['apellidos']."</td>
</tr>
  <tr>
            <td>Correo electrónico</td><td>".$_POST['email']."</td>
</tr>
  <tr>
            <td>telefono</td><td>".$_POST['telefono']."</td>
</tr>
  <tr>
            <td>Año de nacimiento</td><td>".$_POST['anyo']."</td>
</tr>
            </table>
    </body>
   </html>";
echo $salida;