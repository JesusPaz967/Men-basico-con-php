<html>
  <head>
  <script>
            function eliminar(){
            let ID = document.getElementById("txtid").value;
 
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("texto").innerHTML = this.responseText; 
            }
            };
            xhttp.open("GET","eliminar_alumnos.php?txtid=" + ID, true);
            xhttp.send();
            document.getElementById("formulario").reset();

        }
        

    </script>

  </head>
  
  
  <?php
    include('Conexion.php');
    include('cabecera.php');
    $alumnos= "select * from alumnos";
    ?>


  <body>
    <center>
<table border="2px" id="tabla"> 
           <tr>
              <th colspan="7" bgcolor="yellow"><center>DATOS DE LOS ALUMNOS</center></th>
              
          </tr>
          <tr>
              <th bgcolor="orange">IDalumno</th>
              <th bgcolor="orange">Nombre</th>
              <th bgcolor="orange">Fecha_Nac</th>
              <th bgcolor="orange">Escuela</th>
              <th bgcolor="orange">Carrera</th>
              <th bgcolor="orange">Idusuarios</th>
              <th bgcolor="orange">Fecha_creacion</th>
          </tr>
          <?php
          $registros=mysqli_query($conexion,$alumnos);
          while ($reg=mysqli_fetch_assoc($registros)){
        ?>
        <tr>
              <td> <?php echo $reg["idalumno"] ?></td>
              <td> <?php echo $reg["nombre"] ?></td>
              <td> <?php echo $reg["fechanac"] ?></td>
              <td><?php echo $reg["escuela"] ?></td>
              <td><?php echo $reg["carrera"] ?></td>
              <td><?php echo $reg["idusuarios"] ?></td>
              <td><?php echo $reg["feccreacion"] ?></td>
          </tr>
          <?php } ?>
        </table> 
        <br>
          </center>

<form  method="GET" id="formulario">
Ingresar ID del alumno a eliminar:
<input type="text" name="txtidalum" id="txtid">
<br>
<input type="button" value="Eliminar" name="btneliminar" onclick="eliminar()"> 

</form>
<div id="texto">

</div>

  </body>
   

</html>