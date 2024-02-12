<?php
include("cabecera.php");
?>
<head>
    <title>Lista de Promedio</title>
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js">

</script>
    <script>
             function Listar($scope,$http){
                $scope.mostrar = function(){
                    let txtbuscador = $scope.buscador;
                    if(txtbuscador == null){ txtbuscador = "";}
                    var url= "listar_json.php?txtbuscador="+txtbuscador;
                    $http.get(url).then(function(response){
                        $scope.Alumnos=response.data;
                    });
                }
            }
    </script>
</head>
<html ng-app="">
<body ng-init="mostrar()" ng-controller="Listar">
    <center>
    <form > 
        BUSCADOR: <input type="text" ng-model="buscador" ng-change="mostrar()">
    </form>
    <table border="2">
     <tr>
            <th colspan="7" bgcolor="yellow"><center>DATOS DE LOS ALUMNOS</center></th>
              
    </tr>
    <tr>
        <td bgcolor="orange">ID</td>
        <td bgcolor="orange">NOMBRE DEL ALUMNO</td>
        <td bgcolor="orange">NOTA 1</td>
        <td bgcolor="orange">NOTA 2</td>
        <td bgcolor="orange">NOTA 3</td>
        <td bgcolor="orange">PROMEDIO</td>
        <td bgcolor="orange">ESTADO</td>
    </tr>
    <tr ng-repeat="alumno in Alumnos">
                <td>{{alumno.idalumno}}</td>
                <td>{{alumno.nombre}}</td>
                <td>{{alumno.nota1}}</td>
                <td>{{alumno.nota2}}</td>
                <td>{{alumno.nota3}}</td>
                <td>{{alumno.promedio}}</td>
                <td>{{alumno.estado}}</td>
            </tr>
    </table>
     <br>
    <h2><a href=Menu.php> REGRESAR AL MENU</a></h2>
    </center>
</body>
</html>
