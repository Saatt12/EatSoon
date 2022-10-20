<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Eat Soon</title>
    <link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->

<!-- Custom styles for this template -->

<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#buscador').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script> 
  </head>

<body>
<header class="header">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="container-logo d-flex justify-content-start align-items-center">
                    <div class="navbar-brand">
                        <img src="img/hamburguesa-con-queso.png" alt="Avatar Logo" style="width:40px;">
                        <a href="/" class="text-logo-header">EatSoon</a>
                    </div>
                </div>
                <div class="container-navbar">
                    <nav class="nav-header">
                        <label for="menu" class="nav__label">
                            <img src="img/menu_sidebar.svg" class="nav__img" alt="">
                        </label>
                        <input type="checkbox" id="menu" class="nav__input">

                        <ul class="main-menu">
                        
                            <li class="menu-item">
                                <i class="bi bi-clipboard-check" style="font-size: 1.5rem; color: white;"></i>
                                <a href="registro.php" id="nav-registrarP">Registra Producto</a>
                            </li>

                            <li class="menu-item">
                                <i class="bi-person-circle" style="font-size: 1.5rem; color: white;"></i>
                                <a href="/" id="nav-iniciar">Inicia Sesion</a>
                            </li>
                            <li class="menu-item">
                                <i class="bi-box-arrow-in-right" style="font-size: 1.5rem; color: white;"></i>
                                <a href="/" id="nav-crear">Crear cuenta</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </header>
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="wrap-contenido__hero">
                    <div class="contenido__hero">
                        <h2>¿Que te apetece?</h2>
                        <p>Búscalo aquí</p>
                    </div>
                    <form>
                        <input type="text" class="u-full-width" placeholder="¿Que te gustaria probar?" id="buscador">
                        <input type="submit" class="submit__buscador">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="barra__container">
        <div class="columna__barra">
            <img src="img/icons1.png" alt="" style="width: 60px;">
            <p>Distintos alimentos<br>
                Distintas categorias</p>
        </div>
        <div class="columna__barra">
            <img src="img/icons2.png" alt="" style="width: 60px;">
            <p>Consigue lo que buscas<br>
                Antes de que caduque</p>
        </div>
        <div class="columna__barra">
            <img src="img/icons3.png" alt="" style="width: 60px;">
            <p>Todos los productos<br>
                A mitad de precio</p>
        </div>
    </div>

    <div class="container__platillos bg-dark">
        <div class="titulo__platillos">
            <h1 class="encabezado">Ofertas del dia</h1>
        </div>
    </div>
     

   <!-- Contenido -->    
			


<table class="table table-hover">
  <tbody class="BusquedaRapida">
      <div class="wrap column-4 columns">
        <?php
        include "db.php";
        $con = connect();
        $consulta = "SELECT * FROM producto";
        $resultado = mysqli_query($con , $consulta);
        $contador=0;

        while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
        <tr class="contenedor">
          <td>
            <div class="tarjeta-rest">
              <div class="wrap-text_tarjeta-rest">
                <h3><?php  echo $misdatos['nombre_producto'];?></h3>
                <div class="cta-wrap_tarjeta-rest">
                    <div class="precio_tarjeta-rest">
                        <span><?php  echo $misdatos['precio_producto'];?></span>
                    </div>
                    <div class="cta_tarjeta-rest">
                        <a href="">Añadir al carrito </a>
                        <a href="">Mas Informacion </a>
                    </div>
                </div>
              </div>
              </div>
            </div>
          </td>  
        </tr>

        <?php }?>        

  </tbody>
</table>		
<!-- Fin Contenido --> 
</div>



</div><!-- Fin row -->


</div><!-- Fin container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
  </body>
</html>