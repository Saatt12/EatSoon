<header class="header">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="container-logo d-flex justify-content-start align-items-center">
                <div class="navbar-brand">
                    <img src="<?=RUTA?>/assets/img/hamburguesa-con-queso.png" alt="Avatar Logo" style="width:40px;">
                    <?php if ($_SESSION['user']!=null) {?>
                    <a href="index_usuario_creado.php" class="text-logo-header">EatSoon</a>
                    <?php }else{ ?>
                        <a href="index.php" class="text-logo-header">EatSoon</a>
                    <?php } ?>
                </div>
            </div>
            <div class="container-navbar">
                <nav class="nav-header">
                    <label for="menu" class="nav__label">
                        <img src="<?=RUTA?>/assets/img/menu_sidebar.svg" class="nav__img" alt="">
                    </label>
                    <input type="checkbox" id="menu" class="nav__input">
                    <?php if ($_SESSION['user']==null) {?>
                    <ul class="main-menu">

                        <li class="menu-item">
                            <a class="bi bi-cart-fill" style="font-size: 1.5rem; color: white; padding: 0 20px;" data-bs-toggle="modal" data-bs-target="#demo"> <span style="border-radius: 50%;width: 22px;height: 22px;padding: 3px;text-align: center;vertical-align: middle;font-size: 12px; background-color: red;position: absolute;color: aliceblue;"><?php echo  $contadorCarrito ? $contadorCarrito : 0; ?></span></a>
                        </li>
                        <li class="menu-item">
                            <i class="bi-person-circle" style="font-size: 1.5rem; color: white;"></i>
                            <a href="login.php" id="nav-iniciar">Inicia Sesion</a>
                        </li>
                        <li class="menu-item">
                            <i class="bi-box-arrow-in-right" style="font-size: 1.5rem; color: white;"></i>
                            <a href="crear.php" id="nav-crear">Crear cuenta</a>
                        </li>
                    </ul>
                    <?php }else{ ?>
                    <ul class="main-menu">

                        <li class="menu-item">
                            <img class="icon-historial-img" width="40" src="<?=RUTA?>/assets/img/historial.jpeg" alt="">
                            <a href="<?=RUTA?>/historial.php">Historial de compras</a>
                        </li>

                        <li class="menu-item">
                            <a class="bi bi-cart-fill" style="font-size: 1.5rem; color: white; padding: 0 20px;" data-bs-toggle="modal" data-bs-target="#demo"> <span style="border-radius: 50%;width: 22px;height: 22px;padding: 3px;text-align: center;vertical-align: middle;font-size: 12px; background-color: red;position: absolute;color: aliceblue;"><?php echo  $contadorCarrito ? $contadorCarrito : 0; ?></span></a>
                        </li>

                        <li class="menu-item">
                            <i class="bi bi-clipboard-plus-fill" style="font-size: 1.5rem; color: white;"></i>
                            <a href="registrar.php" id="nav-iniciar">Registrar Producto</a>
                        </li>
                        <li class="menu-item user-menu-wrap">
                            <a class="mini-photo-wrapper" href="#"><i class="bi-person-circle" style="font-size: 1.5rem; color: white;"></i></a>
                            <div class="menu-container">
                                <ul class="user-menu">
                                    <div class="profile-highlight">

                                        <div class="details">
                                        <div id="profile-name"><a class="dropdown-item" href="logout.php">Cerrar session</a></div>
                                        <div id="profile-footer"><a class="dropdown-item" href="pedidos.php">Mi Pedido</a></div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </nav>
</header>
