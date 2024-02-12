<html>
<head>
    <title>Document</title>
    <script>
            function guardarnotas(){
            let alumno = document.getElementById("comboalu").value;
            let  nota1 = document.getElementById("tnota1").value;
            let  nota2=document.getElementById('tnota2').value;
            let  nota3=document.getElementById('tnota3').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("texto").innerHTML = this.responseText; 
            }
            };
            xhttp.open("GET","Enviar_notas.php?comboalu=" + alumno + "&tnota1=" + nota1+"&tnota2="+nota2+"&tnota3="+nota3, true);
            xhttp.send();
            document.getElementById("formulario").reset();

        }
        
    </script>
</head>
    <?php
       
    include('cabecera.php');
    include('Conexion.php');
    
    $sql= "select * from alumnos ";
    $registros=mysqli_query($conexion,$sql);
      
    ?>
    <body>
        
 
<form  method="GET" id="formulario">
<h2>INGRESAR NOTAS  DEL ALUMNO:</h2>
<br><br>
Alumno:
<select name="comboalum" id="comboalu" >
<?php
while($reg=mysqli_fetch_array($registros)){
    echo"<option value=".$reg['idalumno'].">".$reg['nombre']."</option>";
}

?>
</select>
<br><br>
NOTA 1:
<input type="text" name="txtnota1" id="tnota1"><br><br>

NOTA 2:
<input type="text" name="txtnota2" id="tnota2"><br><br>

NOTA 3:
<input type="text" name="txtnota3" id="tnota3" ><br><br>


<input type="button" value="Guardar notas"  onclick="guardarnotas()">

</form>
<div id="texto"></div>
<br>
<a href="Menu.php"><b> VOLVER AL MENU</a> 

</body>
</htlm>