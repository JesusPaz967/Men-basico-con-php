<?php
 session_start();
include('cabecera.php');
include('Conexion.php');
$id=$_GET['id'];
$sql= "select * from alumnos where idalumno= '$id'";
$registros=mysqli_query($conexion,$sql);
$reg=mysqli_fetch_array($registros);
$_SESSION['idalumno'] = $reg['idalumno'];


$nombre =$reg["nombre"] ;
$fechanac =$reg["fechanac"] ;
$escuela=$reg["escuela"] ;
$carrera =$reg["carrera"] ;
?>

<html>
<head>
    <title>Document</title>
    <script>
            function modificar(){
            let nombre = document.getElementById("txtnom").value;
            let  fecha = document.getElementById("txtfech").value;
            let  escu=document.getElementById('comboescu').value;
            let  carr=document.getElementById('combocarr').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("texto").innerHTML = this.responseText; 
            }
            };
            xhttp.open("GET","actualizar_alumno.php?txtnom=" + nombre + "&txtfech=" + fecha+"&comboescu="+escu+"&combocarr="+carr, true);
            xhttp.send();
            

        }
        
    </script>
</head>
<body>

<form  method="GET">
<h1>Alumno a modificar</h1>
<h3>Id del alumno: <?php echo $reg["idalumno"] ?></h3>
<h3>Nombre:</h3>
<input type="text" name="txtnombre" id="txtnom" value=<?php echo $nombre ?>><br>

<h3>Fecha de nacimiento:</h3>
<input type="date" name="txtfechnac" id="txtfech" value=<?php echo $fechanac?>><br>

<h3>Escuela:</h3>
<select name="txtescuela" id="comboescu" >
    <option value="Escuela de tecnologia de la informacion"
        <?php if ($escuela=="Escuela de tecnologia de la informacion") echo "selected";?>>Escuela de tecnologia de la informacion</option>
    
    <option value="Escuela superior de tegnologia"
        <?php if ($escuela=="Escuela superior de tegnologia") echo "selected";?>>Escuela superior de tegnologia</option>
    
</select><br>

<h3>Carrera:</h3>
<select name="txtcarrera" multiple="4"  id="combocarr">
    <option value="Ingenieria de software con IA"
    <?php if ($carrera=="Ingenieria de software con IA") echo "selected";?>>Ingenieria de software con IA</option>
    <option value="Disenio grafico"
    <?php if ($carrera=="Disenio grafico") echo "selected";?>>Disenio grafico</option>
    <option value="Mecatronica"
    <?php if ($carrera=="Mecatronica") echo "selected";?>>Mecatronica</option>
    <option value="Ingenieria alimentaria"
    <?php if ($carrera=="Ingenieria alimentaria") echo "selected";?>>Ingenieria alimentaria</option>
</select><br>

<br>

<input type="button" name="btnguardar" onclick="modificar()" value="Modificar">

</form>
<div id="texto"></div>
<h2><a href=Menu.php> Volver al Menu</a></h2>
</html>