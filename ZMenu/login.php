<?php
include('Conexion.php');
        $Usuario=$_POST["txtuser"];
        $Clave=$_POST["txtpass"];
        session_start();
        $_SESSION['usuario']=$Usuario;

    if (empty($_POST["txtuser"]) and empty($_POST["txtpass"])) {
    echo "<center><h1>Campos vacios</h1></center>";
    include('RediAcade.php');
    }else{
 
        $sql=("select * from usuarios where idusuarios='$Usuario' and clave='$Clave'");
        $reg= mysqli_query($conexion,$sql);
        if ($reg->fetch_object()) {
            header("Location:Menu.php");
        }else{
            echo " <center><h1>Usuario no encontrado</h1></center>" ;
            include('RediAcade.php');

        }
    }
mysqli_close($conexion);
?> 