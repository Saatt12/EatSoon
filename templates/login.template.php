<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href=".\assets\css\login.css">

  


    <link rel="stylesheet" href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="<?=RUTA?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styleRP.css">  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    <title><?=$title?></title>
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
                    <img src="<?=RUTA?>/assets/img/hamburguesa-con-queso.png" alt="Avatar Logo" style="width:40px;">
                    <?php 
                    if ($_SESSION['user']!=null) {?>
                    <a href="index_usuario_creado.php" class="text-logo-header">EatSoon</a>
                    <?php }else{ ?>
                        <a href="index.php" class="text-logo-header">EatSoon</a>
                    <?php } ?>
                </div>
            </div>
            <div class="container-navbar container-fluid">
                <nav class="nav-header">
                    <label for="menu" class="nav__label">
                        <img src="<?=RUTA?>/assets/img/menu_sidebar.svg" class="nav__img" alt="">
                    </label>
                    <ul class="main-menu">

                         <li class="menu-item justify-content-end">
                            
                            <i class="bi-box-arrow-in-right" style="font-size: 1.5rem; color: white;"></i>
                            <a href="crear.php" id="nav-crear">Crear cuenta</a>
                            
                        </li> 
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</header>  

        <?php require $page; ?>

 
<script src="<?=RUTA?>/assets/js/paginacion.js"></script>        
<script src="<?=RUTA?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>