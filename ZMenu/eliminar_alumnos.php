
<?php

include('Conexion.php');
$id=$_GET['txtid'];

$sql= "delete from alumnos where idalumno= '$id'";
$registros=mysqli_query($conexion,$sql);

if ($registros) {
    echo "<center><h2>Dato eliminado correctamente</h2></center>";
    echo "<h2><a href=Menu.php>Regresar  al Menu</a></h2>";
}else{
    echo "<center><h2>Hubo fallas en la eliminacion de datos</h2></center>";
    echo "<center><h2><a href=Menu.php>Regresar  al Menu</a></h2></center>";
}

?>