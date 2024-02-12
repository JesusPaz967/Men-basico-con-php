
<html ng-app="">
<head>
<script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js">
</script>
<script>
        function Lista($scope,$http){
            $scope.mostrar = function(){
                var url= "listar_json.php?txtbuscador=";
                $http.get(url).then(function(response){
                    $scope.Alumnos=response.data;
                });
            }
            $scope.Notas = function(id) {
                    window.location.href = "zingreso2.php?idalumno="+id;
            }
        }
    </script>
</head>
 <body ng-init="mostrar()" ng-controller="Lista">
<?php
include('cabecera.php');
?>

<center>
    <table border='2'> 
        
          <tr>
            <th colspan="5" bgcolor="yellow">DATOS DE PROMEDIO</th>
          </tr>
            <tr> 
            <td bgcolor="orange">ID</td> 
            <td bgcolor="orange">NOMBRE</td> 
            <td bgcolor="orange">PROMEDIO</td> 
            <td bgcolor="orange">ESTADO</td> 
            <td bgcolor="orange"> OPCION</td>
            </tr>
            <tr ng-repeat="alumno in Alumnos">
                <td>{{alumno.idalumno}}</td>
                <td>{{alumno.nombre}}</td>
                <td>{{alumno.promedio}}</td>
                <td>{{alumno.estado}}</td>
                <td><button ng-click=Notas(alumno.idalumno)>NOTAS</button></td>
            </tr>
       
    </table>
     <br>
    <h2><a href=Menu.php> VOLVER AL MENU</a></h2>
</center>
</body>
</html>