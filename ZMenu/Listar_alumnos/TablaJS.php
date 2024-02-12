<?php
    include("Conexion.php");
    $sql = "select * from alumnos";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    $regarray = array();
    while($reg = mysqli_fetch_array($registros)){
        $regarray[]  = $reg;
    }
    echo json_encode($regarray);
    mysqli_close($conexion);
?>