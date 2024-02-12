<?php
    $Id = $_POST["IdUser"];
    include("Conexion.php");
    $sql ="delete from alumnos where idalumno ='$Id'";
    mysqli_query($conexion,$sql) or die("Problemas al agrear el nuevo alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "Alumno eliminado";
?>