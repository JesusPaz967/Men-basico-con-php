<?php 
    session_start();
    
    include("Conexion.php");
    $IDusuarios = $_SESSION['usuario'];
    $id=$_GET['idalumno'];
    $n1 = $_GET["tnota1"];
    $n2 =  $_GET["tnota2"];
    $n3 =  $_GET["tnota3"];
    $op=$_GET["op"];
    $promedio = round((($n1 + $n2 + $n3) / 3),1);
    if($op=="insert"){
        $sql="insert into notas(idalumno,nota1,nota2,nota3,promedio,idusuarios) values ('$id','$n1','$n2','$n3','$promedio','$IDusuarios')";
    }else{
         $sql= "update notas set nota1='$n1', nota2='$n2',nota3='$n3',promedio='$promedio'  where idalumno = '$id'";
    } 
    mysqli_query($conexion,$sql); 

     echo "<center><h1>Notas ingresado correctamente</h1></center><br>";
    
    mysqli_close($conexion);
   
   
  
  

?>