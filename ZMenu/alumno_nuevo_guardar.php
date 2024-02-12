<?php

include('Conexion.php');
session_start();
$idusuarios=$_SESSION['usuario'];

$nom=$_GET["txtnom"];
$fechanac=$_GET["txtfech"];
$escuela=$_GET["comboescu"];
$carrera=$_GET["combocarr"];

$sql="insert into alumnos(nombre,fechanac,escuela,carrera,idusuarios) values ('$nom','$fechanac','$escuela','$carrera','$idusuarios')";
    
mysqli_query($conexion,$sql)or die("Problemas en el insert:". mysqli_error($conexion));
    echo "<center><h1>Alumno ingresado correctamente</h1></center><br>";
mysqli_close($conexion);

?>