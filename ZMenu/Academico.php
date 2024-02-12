<html><?php
include('cabecera.php');
?>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>

<body >

<center>
    <div  class="container border border-primary-sAubtle py-3 my-2 w-25 p-30 " style="background-color: skyblue;" >
    
    <form action="login.php" method="post" >

        
        
       <div>
        <h3>Ingresar ID del Usuario </h3><br>
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
       </svg>
       
       <input type="text" name="txtuser" placeholder="            Id usuario"  class="form-control-center py-2 my-1 ">
        </div>


        <br><br>


        
        
        <div>
         <h3>Ingresar Contrasenia </h3><br>
         
         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        </svg>
        <input type="password" name="txtpass" placeholder="             ***********"  class="form-control-center py-2 my-1">
        </div>


        <br><br>
        <input type="submit" value="Ingresar" name="btningresar" class="btn btn-outline-primary">
    </form>
</div>
</center>

</body>
</html>