<?php
    include("Conexion.php");
    $texto=$_GET['txtbuscador'];
    $sql = "select alu.idalumno,alu.nombre,nta.promedio ,nta.nota1 ,nta.nota2 ,nta.nota3,case when promedio >=10.5 then 'Aprobado' else 'Desaprobado' end estado  from alumnos alu left   join notas nta on nta.idalumno = alu.idalumno where alu.nombre LIKE '$texto%'";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    $regarray=array();

    while($reg = mysqli_fetch_array($registros)){
        $regarray[]=$reg;  
    }
    echo json_encode($regarray);
    mysqli_close($conexion);
?>  