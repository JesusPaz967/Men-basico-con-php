<html>
    <?php
    include('Conexion.php');
    include('cabecera.php');
    $alumnos= "select * from alumnos";
    ?>

<center>
<table border="2px"> 
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

<form action="modificar_alumno.php" method="POST">
Ingresar ID del alumno a  modificar:
<input type="text" name="txtalum">
<br>
<input type="submit" value="Modificiar" name="btnmodificar">

</form>

</html>