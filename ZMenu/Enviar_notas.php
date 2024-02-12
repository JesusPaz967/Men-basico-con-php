<?php 
    session_start();
    
    include("Conexion.php");
   
    $idusuarios=$_SESSION["usuario"];
    $IdAlumno  = $_GET["comboalu"];
    $Nota1 = $_GET["tnota1"];
    $Nota2 = $_GET["tnota2"];
    $Nota3 = $_GET["tnota3"];
    $promedio = round((($Nota1 + $Nota2 + $Nota3) / 3),1);
    $sql= "insert into notas(idalumno,nota1,nota2,nota3,promedio,idusuarios) values ('$IdAlumno','$Nota1','$Nota2','$Nota3','$promedio','$idusuarios')";
    mysqli_query($conexion,$sql) or die("Problemas al agrear el nuevo alumno:". mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<center><h1>Notas ingresadas correctamente</h1></center><br>";
    


?>