<?php
    include("Conexion.php");
    session_start();
    $IDusuarios = $_SESSION['idalumno'];
    $Nombre = $_POST["txtNombrealumno"];
    $FechaDeNacimiento = $_POST["txtFechaDeNacimiento"];
    $Escuela = $_POST["comboEscuela"];
    $Carrera = $_POST["comboCarrera"];  
    $sql="update alumnos set nombre = '$Nombre', fechanac= '$FechaDeNacimiento' , escuela= '$Escuela' , carrera= '$Carrera' where idalumno = $IDusuarios";
    mysqli_query($conexion,$sql) or die("Problemas al modificar alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "Alumno Modificado correctamente";
?>