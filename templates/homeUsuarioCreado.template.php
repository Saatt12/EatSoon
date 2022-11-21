<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styles.css">
    
    

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
                            <a class="bi bi-cart-fill" style="font-size: 1.5rem; color: white; padding: 0 20px;"  data-bs-toggle="modal" data-bs-target="#demo"></a>
                            
                            <!-- cuerpo modal -->
                            <div class="modal fade" id="demo" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" style="color:white;">Mi Carrito</h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-dark">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col">Cantidad</th>
                                                    <th scope="col">Accion</th>
                                                    <th scope="col">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                    <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                    <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                    <td>@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>                                   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;
                                            border-radius: 4px;                              background-color: goldenrod;
                                            color: white;
                                            font-weight: bold;
                                            text-align: center;">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <!-- fin cuerpo modal -->
                          
                        </li>

                        <li class="menu-item">
                            <i class="bi bi-clipboard-plus-fill" style="font-size: 1.5rem; color: white;"></i>
                            <a href="registrar.php" id="nav-iniciar">Registrar Producto</a>
                        </li>
                        <li class="menu-item">
                            <i class="bi-person-circle" style="font-size: 1.5rem; color: white;"></i>
                            <a href="crear.php" id="nav-crear">Mi Perfil</a>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?=RUTA?>/assets/js/Alerts.js"></script>  <!--Conecta el js-->
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
</body>
</html>