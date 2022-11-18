<!DOCTYPE html>
<html lang="es">
     
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat-Soon</title>
    <link href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styles.css">
    
  <!--  <link rel="stylesheet" href="<?=RUTA?>/assets/css/styleRP.css"> -->
    

</head>
<body>
 <!--
<header class="header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="container-logo d-flex justify-content-start align-items-center">
                <div class="navbar-brand">
                    <img src="<?=RUTA?>/assets/img/hamburguesa-con-queso.png" alt="Avatar Logo" style="width:40px;">
                    <a href="index.php" class="text-logo-header">EatSoon</a>
                </div>
            </div>
            <div class="container-navbar">
                <nav class="nav-header">
                    <label for="menu" class="nav__label">
                        <img src="<?=RUTA?>/assets/img/menu_sidebar.svg" class="nav__img" alt="">
                    </label>
                    <input type="checkbox" id="menu" class="nav__input">

                    <ul class="main-menu">

                     <li class="menu-item">
                            <i class="bi bi-clipboard-plus-fill" style="font-size: 1.5rem; color: white;"></i>
                            <a href="registrar.php" id="nav-iniciar">Registrar Producto</a>
                            
                        </li> 

                        <li class="menu-item">
                            <i class="bi-person-circle" style="font-size: 1.5rem; color: white;"></i>
                            <a href="/" id="nav-iniciar">Inicia Sesion</a>
                        </li>
                        <li class="menu-item">
                            <i class="bi-box-arrow-in-right" style="font-size: 1.5rem; color: white;"></i>
                            <a href="crear.php" id="nav-crear">Crear cuenta</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</header> -->



        <?php require $page; ?>

        <script src="<?=RUTA?>/assets/js/main.js"></script>
    <script src="<?=RUTA?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?=RUTA?>/assets/js/Alerts2.js"></script>  <!--Conecta el js-->

</body>
</html>


<script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.png|.jpg|.jpeg|.svg)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        alert('Por favor, seleccione una imagen');
        archivoInput.value = '';
        return false;
    }

    else
    {
        //PRevio de las extenciones
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
        }
    } 
}
</script>