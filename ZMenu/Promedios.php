<?php
include('Conexion.php');

?>

<html>
<head>

</head>
<body>
<?php
include('cabecera.php');

?>
    <center>
<table border="2px"> 
           <tr>
              <th colspan="7" bgcolor="yellow"><center>NOTAS DE LOS ALUMNOS</center></th>
              
          </tr>
          <tr>
              <th bgcolor="orange">IDalumno</th>
              <th bgcolor="orange">Nombre</th>
              <th bgcolor="orange">Promedio</th>
              <th bgcolor="orange">NOTAS</th>
          </tr>
          <?php
          $sql="select alu.idalumno,alu.nombre,nta.promedio from alumnos alu left join notas nta on nta.idalumno=alu.idalumno";
          $registros=mysqli_query($conexion,$sql);
          while ($reg=mysqli_fetch_array($registros)){
        ?>
        <tr>
              <td> <?php echo $reg["idalumno"] ?></td>
              <td> <?php echo $reg["nombre"] ?></td>
              <td><?php echo $reg["promedio"] ?></td>
              <td><a href="ingreso2n.php?idalumno=<?php echo $reg["idalumno"]?>">Notas</a></td>

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