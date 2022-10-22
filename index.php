<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Eat Soon</title>
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>

    <script type="text/javascript">  
        $(document).ready(function () {
        (function($) {
            $('#buscador').keyup(function () {
                    var ValorBusqueda = new RegExp($(this).val(), 'i');
                    $('.wrap .tarjeta-rest').hide();
                    $('.wrap .tarjeta-rest').filter(function () {
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

    <main>
        <div class="hero">
            <div class="container">
                <div class="row">
                    <div class="wrap-contenido__hero">
                        <div class="contenido__hero">
                            <h2>¿Que te apetece?</h2>
                            <p>búscalo aquí</p>
                        </div>
                        <form class="d-flex">
                            <input type="text" class="form-control" placeholder="¿Que te gustaria probar?"oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required
                                id="buscador" maxlength="40">
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="barra__container">
            <div class="columna__barra">
                <img src="img/icons1.png" alt="" style="width: 60px; height: 50px;">
                <p>Distintos alimentos<br>
                    distintas categorias</p>
            </div>
            <div class="columna__barra">
                <img src="img/icons2.png" alt="" style="width: 60px; height: 45px;">
                <p>Consigue lo que buscas<br>
                    antes de que caduque</p>
            </div>
            <div class="columna__barra">
                <img src="img/icons3.png" alt="" style="width: 45px; height: 45px;">
                <p>Todos los productos<br>
                    a mitad de precio</p>
            </div>
        </div>

        <div class="container__platillos bg-dark">
            <div class="titulo__platillos">
                <h1 class="encabezado"></h1>
            </div>

            <div class="wrap column-4 columns">

                <?php  
                    //Edgar Copa: Conexion a la BD de mysql
                    $enlace = mysqli_connect("127.0.0.1","root","","eatsoon");
                    if(!$enlace){
                        die("no se puede".mysqli_error());
                    }
                    //Consulta a la BD
                    $accion_nm = "SELECT * FROM producto";
                    $consulta_nm = mysqli_query($enlace,$accion_nm) or die(mysqli_error());
                    $numero = mysqli_num_rows($consulta_nm);
                    //extraemos todos los datos que esten en la BD y los mostramos
                    while($resultado = mysqli_fetch_assoc($consulta_nm)){
                ?>
                <div class="tarjeta-rest" style="background: url(storge/<?php echo $resultado['imagen']?>) center; background-size: cover;">
                    <div class="wrap-text_tarjeta-rest">
                        <h1><?php echo $resultado['nombre_producto'];?></h1>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="container__fechas">
                                <span><?php echo $resultado['fecha_publicacion'];?></span>
                                
                            </div>

                            <div class="container__fechas">
                                <span><?php echo $resultado['fecha_caducidad'];?> </span>
                                
                            </div>
                            <div class="precio_tarjeta-rest">
                                <span><?php echo $resultado['precio_producto'];?>.Bs</span>
                            </div>
                            <div class="cta_tarjeta-rest">
                                <a href="">Añadir al carrito </a>
                                <a href="">Más Información </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="container__platillos bg-dark">
            <div class="titulo__platillos">
                <h1 class="encabezado"></h1>
            </div>
        </div>

        
    </main>


    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/Alerts.js"></script>  <!--Conecta el js-->
</body>

</html>