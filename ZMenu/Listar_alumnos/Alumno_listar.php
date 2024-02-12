<?php include("cabecera.php"); ?>
<script>
        function ModificarAlumno(id) {
            window.location.href = "Modificar_Alumno.php?IdUser="+id+"&Lugar=Nolocal";
        }
        function EliminarAlumno(id) {
            let IdNombre = id;
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "Elimina_Alumnos.php", true);
            xhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                        alert(this.responseText);
                        ListarTabla();
                }
            };            
            xhttp.send("IdUser="+IdNombre);
        }
        function ListarTabla(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var tbodyHtml = "";
                        JSON.parse(this.responseText).forEach((obj)=> {
                            tbodyHtml+="<tr>";
                            tbodyHtml+="<td>"+obj.idalumno+"</td>";
                            tbodyHtml+="<td>"+obj.nombre+"</td>";
                            tbodyHtml+="<td>"+obj.fechanac+"</td>";
                            tbodyHtml+="<td>"+obj.escuela+"</td>";
                            tbodyHtml+="<td>"+obj.carrera+"</td>";
                            tbodyHtml+="<td>"+obj.idusuarios+"</td>";
                            tbodyHtml+="<td>"+obj.feccreacion+"</td>";
                            tbodyHtml+="<td><input type=button value=Modificar onclick=ModificarAlumno("+obj.idalumno+")><input type=button value=Eliminar onclick=EliminarAlumno("+obj.idalumno+")></td>";
                            tbodyHtml+="</tr>";
                    });
                    document.getElementById('tblfilas').innerHTML = tbodyHtml;
                }
            }
            xhttp.open("POST", "TablaJS.php", true);
            xhttp.send();
        }
</script>
<html>
    <body onload="ListarTabla()">
    <center>
    <a href="Alumno_Nuevo.php"><h2>Nuevo Alumno</h2></a>
    <table border='2'> 
        <thead>
            <tr>
                <th colspan="9" bgcolor="yellow">DATOS DE ALUMNOS</th>
            </tr>
            <tr> 
            <th bgcolor="orange">IDalumno</th> 
            <th bgcolor="orange">Nombre</th> 
            <th bgcolor="orange">Fecha_Nac</th> 
            <th bgcolor="orange">Escuela</th> 
            <th bgcolor="orange">Carrera</th> 
            <th bgcolor="orange">Idusuarios</th> 
            <th bgcolor="orange">Fecha_creacion</th> 
            <th bgcolor="orange">OPCIONES</th> 
            </tr>
        </thead>
        <tbody id = "tblfilas">
        </tbody>
    </table>
    <br>
    <a href=../Menu.php> REGRESAR AL MENU</a> 
    </center>
    </body>
</html>