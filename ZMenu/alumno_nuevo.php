<html>
<head>
    <title>Document</title>
    <script>
            function guardar(){
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
            xhttp.open("GET","alumno_nuevo_guardar.php?txtnom=" + nombre + "&txtfech=" + fecha+"&comboescu="+escu+"&combocarr="+carr, true);
            xhttp.send();
            document.getElementById("formulario").reset();

        }
        

    </script>
</head>
<body>
<?php
include('cabecera.php');
?>
<form action="alumno_nuevo_guardar.php" method="GET" id="formulario">
<h1>Alumno Nuevo</h1>
<h3>Nombre:</h3>
<input type="text" name="txtnombre" id="txtnom"><br>

<h3>Fecha de nacimiento:</h3>
<input type="date" name="txtfechnac" id="txtfech"><br>

<h3>Escuela:</h3>
<select name="txtescuela" id="comboescu">
    <option></option>
    <option value="Escuela de tecnologia de la informacion">Escuela de tecnologia de la informacion</option>
    <option value="Escuela superior de tegnologia">Escuela superior de tegnologia </option>
</select><br>

<h3>Carrera:</h3>
<select name="txtcarrera" multiple="4" id="combocarr">
    <option value="Ingenieria de software con IA">Ingenieria de software con IA</option>
    <option value="Disenio grafico">Disenio grafico</option>
    <option value="Mecatronica">Mecatronica</option>
    <option value="Ingenieria alimentaria">Ingenieria alimentaria</option>
</select><br>

<br>

<input type="button"  onclick="guardar()" value="Guardar">

</form>
<div id="texto"></div>
<br>
<a href="Menu.php"><b> VOLVER AL MENU</a>
</body>
</html>