<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php
include('cabecera.php');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" >MENU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="alumno_nuevo.php">Nuevo alumno</a></li>
            <li><a class="dropdown-item" href="Alumno_modificar.php">Editar alumno</a></li>
            <li><a class="dropdown-item" href="Alumno_eliminar.php">Eliminar alumno</a></li>
            <li><a class="dropdown-item" href="Listar_alumnos/Alumno_listar.php">Listar alumnos</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Notas_alumnos.php">Ingresar notas</a></li>
            <li><a class="dropdown-item" href="zverpromediojson.php">Ver promedios</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reporte
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="listar_pro_json.php">Listar promedios</a></li>
          </ul>
        </li>
      </ul>
        <a class="btn btn-danger" href="Academico.php">SALIR</a>


    
    </div>
  </div>
</nav>

</body>
</html>