<?php
$host="localhost";
$hostuser="root";
$hostpw="";
$hostdb="fdj";

   $conexion = mysqli_connect($host, $hostuser, $hostpw, $hostdb);
   

    if (!$conexion) {
        die('No se ha podido conectar a la base de datos');
    }

?>
