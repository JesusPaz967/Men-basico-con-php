<!DOCTYPE html>
<head>
    <title>Nuevo Alumno</title>
    <?php
        include("cabecera.php");
    ?>
    <script>
            function GuardarAlumno() {
                let Nombre = document.getElementById('txtNombrealumno').value;
                let FechaDeNacimiento= document.getElementById('txtFechaDeNacimiento').value;
                let Escuela = document.getElementById('comboEscuela').value;
                let Carrera = document.getElementById('comboCarrera').value;
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "Alumno_Nuevo_Guardar.php", true);
                xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //document.getElementById("respuesta").innerHTML = this.responseText;
                        alert(this.responseText);
                    }
                };
                xhttp.send("txtNombrealumno="+Nombre+"&txtFechaDeNacimiento="+FechaDeNacimiento+"&comboEscuela="+Escuela+"&comboCarrera="+Carrera);
                document.getElementById('Formulario').reset();

            }
    </script>
</head>
<body>
    <center>
    <form id = "Formulario">
        <h1>NUEVO ALUMNO</h1>
        <h3>NOMBRE:</h3>
        <input type="text" id="txtNombrealumno"> 
        <br>
        <h3>FECHA DE NACIMIENTO:</h3>
        <input type="date" id="txtFechaDeNacimiento">
        <br>
        <h3>ESCUELA:</h3>
        <select id="comboEscuela">
        <option value="Escuela de tecnologia de la informacion">Escuela de tecnologia de la informacion</option>
        <option value="Escuela superior de tegnologia">Escuela superior de tegnologia </option>

        </select>
        <br>
        <h3>CARRERA:</h3>
        <select id="comboCarrera" multiple ="10" >
        <option value="Ingenieria de software con IA">Ingenieria de software con IA</option>
        <option value="Disenio grafico">Disenio grafico</option>
        <option value="Mecatronica">Mecatronica</option>
        <option value="Ingenieria alimentaria">Ingenieria alimentaria</option>
        </select>
        <br>
        <br>
        <input type=button value="Guardar" onclick="GuardarAlumno()">
    </form>
    <div id="respuesta">
    </div>
    <br>
    <a href=../Menu.php> REGRESAR AL MENU</a>
    </center>
</body>
</html>