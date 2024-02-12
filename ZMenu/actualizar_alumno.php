<?php

include('Conexion.php');
session_start();
$idusuarios=$_SESSION["idalumno"];
$nombre=$_GET["txtnom"];
$fechanac=$_GET["txtfech"];
$escuela=$_GET["comboescu"];
$carrera=$_GET["combocarr"];

$sql = "update alumnos set nombre='$nombre', fechanac='$fechanac',escuela='$escuela',carrera='$carrera' where idalumno = $idusuarios";
 mysqli_query($conexion,$sql);

    echo "<center><h1>Alumno Modificado correctamente</h1></center><br>";
   
 mysqli_close($conexion);

?>