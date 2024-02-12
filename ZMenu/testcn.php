<?php
$conexion=mysqli_connect("localhost","root","","bdacademico") or die("Problemas con la conexion");
echo "Conexion exitosa";
$sql="select * from usuarios";


 $registros = mysqli_query($conexion,$sql) or
  die("Problemas en el select:". mysqli_error($conexion));

 while ($reg=mysqli_fetch_array($registros)){
    echo $reg['nombre'];
 }

 mysqli_close($conexion);
?>