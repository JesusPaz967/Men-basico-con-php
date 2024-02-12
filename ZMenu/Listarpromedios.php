<html>

<body>
<?php
include('cabecera.php');

?>

    <form action="Listarpromedios.php" method="POST">
    <center>
     Buscar:
    <input type="text" name="txtbuscar">
       <input type="submit" value="Buscar" name="btnbuscar">  
     <br>
</center>

    </form>


    <center>
<table border="2px"> 
           <tr>
              <th colspan="7" bgcolor="yellow"><center>DATOS DE LOS ALUMNOS</center></th>
              
          </tr>
          <tr>
              <th bgcolor="orange">IDalumno</th>
              <th bgcolor="orange">Nombre</th>
              <th bgcolor="orange">Nota 1</th>
              <th bgcolor="orange">Nota 2</th>
              <th bgcolor="orange">Nota 3</th>
              <th bgcolor="orange">Promedio</th>
              
          </tr>
          <?php
          include('Conexion.php');
          if(!isset($_POST['txtbuscar'])){
            $_POST['txtbuscar']="";
            $buscar=$_POST['txtbuscar'];
          }
         
        $buscar=$_POST['txtbuscar'];
         $sql="select notas.idalumno, alumnos.nombre, notas.nota1, notas.nota2, notas.nota3, notas.promedio from notas left join alumnos on notas.idalumno = alumnos.idalumno
         where notas.idalumno like '%".$buscar."%' or alumnos.nombre like '%".$buscar."%' or notas.nota1 like '%".$buscar."%' or notas.nota2 like '%".$buscar."%' or notas.nota3 like '%".$buscar."%'";
         
         $registro=mysqli_query($conexion,$sql);
         
          while ($reg=mysqli_fetch_array($registro)){
        ?>
        <tr>
              <td> <?php echo $reg["idalumno"] ?></td>
              <td> <?php echo $reg["nombre"] ?></td>
              <td> <?php echo $reg["nota1"] ?></td>
              <td> <?php echo $reg["nota2"] ?></td>
              <td> <?php echo $reg["nota3"] ?></td>
              <td><?php echo $reg["promedio"] ?></td>
              

          </tr>
          <?php } ?>
        </table> 
          </center>

<?php 
 echo " <center><h2><a href=Menu.php>Volver al Menú</a></h2></center>" ;
mysqli_close($conexion);
?>
</body>
</html>