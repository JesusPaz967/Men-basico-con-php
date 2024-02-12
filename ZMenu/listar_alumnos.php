<?php
include('Conexion.php');
$alumnos= "select * from alumnos";
?>

<html>
  <head>
  <script>
            function eliminar(id){
            let ID = id;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("texto").innerHTML = this.responseText; 
            }
            };
            xhttp.open("GET","Eliminado2.php?txtid=" + ID, true);
            xhttp.send();
            document.getElementById("formulario").reset();

        }

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
            xhttp.open("GET","Modificado2.php?txtnom=" + nombre + "&txtfech=" + fecha+"&comboescu="+escu+"&combocarr="+carr, true);
            xhttp.send();
            

        }
        
        

    </script>

  </head>
<body>
<?php
include('cabecera.php');

?>
<form action="alumno_nuevo.php" method="post">
  <input type="submit" value="Nuevo">
  <br><br>
</form>

    <center>
      
<table border="2px"> 
           <tr>
              <th colspan="9" bgcolor="yellow"><center>DATOS DE LOS ALUMNOS</center></th>
              
          </tr>
          <tr>
              <th bgcolor="orange">IDalumno</th>
              <th bgcolor="orange">Nombre</th>
              <th bgcolor="orange">Fecha_Nac</th>
              <th bgcolor="orange">Escuela</th>
              <th bgcolor="orange">Carrera</th>
              <th bgcolor="orange">Idusuarios</th>
              <th bgcolor="orange">Fecha_creacion</th>
              <th colspan="2" bgcolor="orange">Edicion</th>
          </tr>
          <?php
          $registros=mysqli_query($conexion,$alumnos);
          while ($reg=mysqli_fetch_array($registros)){
        ?>
        <tr>
              <td> <?php echo $reg["idalumno"] ?></td>
              <td> <?php echo $reg["nombre"] ?></td>
              <td> <?php echo $reg["fechanac"] ?></td>
              <td><?php echo $reg["escuela"] ?></td>
              <td><?php echo $reg["carrera"] ?></td>
              <td><?php echo $reg["idusuarios"] ?></td>
              <td><?php echo $reg["feccreacion"] ?></td> 
              <td><input type="button" value="Eliminar" onclick="eliminar(<?php echo $reg['idalumno']?>)"></td>
              <td><a href="Modificado2.php?id=<?php echo $reg["idalumno"] ?>">Modificar</a></td>
          </tr>
          <?php } ?>
        </table> 
          </center>

<?php 
 echo " <center><h2><a href=Menu.php>Volver al Menú</a></h2></center>" ;
mysqli_close($conexion);
?>
<div id="texto"></div>
</body>
</html>