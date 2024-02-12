<?php 
include("Conexion.php");
$id=$_GET['txtid'];
$sql="delete from alumnos where idalumno='$id'";
$registro=mysqli_query($conexion,$sql);
    echo "<center><h2>Dato eliminado correctamente</h2></center>";
    
mysqli_close($conexion);
?>

