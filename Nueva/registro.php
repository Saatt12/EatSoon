<?php
include "db.php";

if(isset($_POST["btnguardar"])){
	$con = connect();
	$nombres=$_POST['apenom'];
	$celular=$_POST['celular'];
	$email=$_POST['email'];
	
	$con->query("insert into alumnos (nombres, celular, email) value ('$nombres', '$celular', '$email')");
	header("Location: index.php?option=ok");
}

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Registrar Alumnos - BaulPHP</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">BaulPHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
 
            <li class="nav-item active">
              <a class="nav-link" href="registro.php">Registrar <span class="sr-only">(current)</span></a>
            </li>  
                  
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->

<div class="container">
 <h1 class="mt-5">Registrar Alumnos </h1>
 <hr>

<div class="row">
  <div class="col-12 col-md-6">

   <!-- Contenido --> 

<form id="frmLogin" action="" method="post">
  <fieldset>
        <div class="form-group">
    <label for="Apellidos">Apellidos y Nombres:</label>
    <input required type="text" class="form-control" name="apenom" placeholder="Ingrese Apellidos y nombres" value="">
 	   </div>
        <div class="form-group">
    <label for="celular">Celular:</label>
    <input required class="form-control" type="text" name="celular"  placeholder="Ingrese celular" value="">
 	   </div>

        <div class="form-group">
    <label for="email">E-Mail:</label>
    <input required class="form-control" type="email" name="email"  placeholder="Ingrese E-mail" value="">
 	   </div>
       
       
       
    <input type="hidden" name="btnguardar" value="v">
<input class="btn btn-primary" type="submit" value="Registrar Alumno">
             
  </fieldset>

</form>

 <!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>