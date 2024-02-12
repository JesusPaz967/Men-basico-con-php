<html>
<head>
    <title>Document</title>
    <script>
            function guardarnotas(){

            let  op = document.getElementById("op").value;   
            let  idalu = document.getElementById("idalumnos").value;  
            let  nota1 = document.getElementById("tnota1").value;
            let  nota2=document.getElementById('tnota2').value;
            let  nota3=document.getElementById('tnota3').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("texto").innerHTML = this.responseText; 
            }
            };
            xhttp.open("GET","Enviar_notas2.php?op=" + op+"&idalumnos="+idalu+"&tnota1=" + nota1+"&tnota2="+nota2+"&tnota3="+nota3, true);
            xhttp.send();
            document.getElementById("formulario").reset();

        }
        
    </script>
</head>
    <?php
    
    include('cabecera.php');
    include('Conexion.php');
    $id=$_GET['idalumno'];
    $sql="select alu.idalumno,alu.nombre,nta.* from alumnos alu left join notas nta on nta.idalumno=alu.idalumno where alu.idalumno=$id";
    $registros=mysqli_query($conexion,$sql);
    $reg=mysqli_fetch_array($registros);
    $nombre=$reg["nombre"];
    if($reg["promedio"]==""){
        $n1="" ;  $n2="" ; $n3="" ; $op="insert";
    }else{
        $n1=$reg["nota1"]; $n2=$reg["nota2"]; $n3=$reg["nota3"]; $op="update";
    }
    

    ?>
    <body>
        
    
<form  method="GET">
<h2>INGRESAR NOTAS  DEL ALUMNO:</h2>
<br><br>
<input type="hidden" name="op" id="op" value=<?php echo $op?>>
<h3>Id del alumno:<?php echo $id ?></h3>

<input type="hidden" name="idalumno" id="idalumnos" value=<?php echo $id?>>
<h3>Nombre:<?php echo $nombre ?></h3>
<br>

NOTA 1:
<input type="text" name="txtnot1" id="tnota1"  value=<?php echo $n1 ?>>

<br><br>

NOTA 2:
<input type="text" name="txtnot2"  id="tnota2" value=<?php echo $n2 ?>><br><br>

NOTA 3:
<input type="text" name="txtnot3"  id="tnota3" value=<?php echo $n3 ?> ><br><br>


<input type="button" value="Guardar notas"  onclick="guardarnotas()">

</form>
<div id="texto"></div>
<br>
<a href="Menu.php"><b> VOLVER AL MENU</a> 
</body>
</htlm>