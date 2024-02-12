<?php
    include("cabecera.php");
    include("Conexion.php");
    echo"<h2>PROMEDIO DE ALUMNO</h1>";
    $sql = "select * from alumnos";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
 ?>

<body>
    <form method="post" action="Promedios.php">
        
        SELECCIONE UN ALUMNO:
        <select name="idalumn">><br>
            <?php
                while($reg = mysqli_fetch_array($registros)){
                    echo"<option value=".$reg['idalumno'].">".$reg['nombre']."</option>";
                }
            ?>
        </select><br><br>
        <input type="submit" value="Ver Promedio">
        
    </form>
    
</body>