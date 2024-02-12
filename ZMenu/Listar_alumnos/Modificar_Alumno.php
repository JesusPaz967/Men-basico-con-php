<?php
    session_start();
    include("cabecera.php");
    include("Conexion.php");
    $id = $_GET["IdUser"];
    $Lugar = $_GET["Lugar"];
    $sql = "select * from alumnos where idalumno=$id";
    $registros = mysqli_query($conexion,$sql) or die("Problemas en el select:".mysqli_error($conexion));
    $reg = mysqli_fetch_array($registros);
    $_SESSION['idalumno'] = $reg['idalumno'];
?>
<html>
    <head>
        <script>
            function ModificarAlumno() {
                let Lugar = document.getElementById('lugar').value;
                let Nombre = document.getElementById('txtNombrealumno').value;
                let FechaDeNacimiento= document.getElementById('txtFechaDeNacimiento').value;
                let Escuela = document.getElementById('comboEscuela').value;
                let Carrera = document.getElementById('comboCarrera').value;
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "Actualizar_Alumno.php", true);
                xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("res").innerHTML = this.responseText;
                        alert(this.responseText);
                        if(Lugar === "Local")
                            window.location.href = "Alumno_Modificar.php";
                        else{
                            window.location.href = "Alumno_Listar.php";
                        }
                    }
                };
                xhttp.send("txtNombrealumno="+Nombre+"&txtFechaDeNacimiento="+FechaDeNacimiento+"&comboEscuela="+Escuela+"&comboCarrera="+Carrera);
                document.getElementById('Formulario').reset();

            }
        </script>
    </head>
    
        <form>
            <input type="hidden" id = "lugar" value=<?php echo $Lugar;?>>
            <h3>ID DEL ALUMNO: <?php echo $reg['idalumno'] ;?></h3>
            <h3>NOMBRE:</h3>
            <input type="text" id ="txtNombrealumno" value=<?php echo $reg['nombre'];?>> 
            <br>
            <h3>FECHA DE NACIMIENTO:</h3>
            <input type="date" id ="txtFechaDeNacimiento" value=<?php echo $reg['fechanac'];?> >
            <br>
            <h3>ESCUELA:</h3>
            <select id ="comboEscuela">>
                <option value="Escuela de tecnologia de la informacion"<?php if($reg['escuela'] == "Escuela de tecnologia de la informacion") echo "selected";?>> Escuela de tecnologia de la informacion</option>
                <option value="Escuela superior de tegnologia"<?php if($reg['escuela'] == "Escuela superior de tegnologia") echo "selected";?>> Escuela superior de tegnologia</option>
            </select>
            <br>
            <h3>CARRERA:</h3>
            <select id ="comboCarrera" multiple ="10" >
                <option value="Ingenieria de software con IA"<?php if($reg['carrera'] == "Ingenieria de software con IA") echo "selected";?>>Ingenieria de software con IA</option>;
                <option value="Disenio grafico"<?php if($reg['carrera'] == "Disenio grafico") echo "selected";?>> Disenio grafico</option>";
                <option value="Mecatronica"<?php if($reg['carrera'] == "Mecatronica") echo "selected";?>> Mecatronica</option>";
                <option value="Ingenieria alimentaria"<?php if($reg['carrera'] == "Ingenieria alimentaria") echo "selected";?>> Ingenieria alimentaria</option>";
            </select>
            <br>
            <br>
            <input type=button value="Modificar" onclick="ModificarAlumno()">
        </form>
        <a href=../Menu.php> REGRESAR AL MENU</a>
    
    </html>