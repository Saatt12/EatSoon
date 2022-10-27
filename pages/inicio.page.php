<main>
    <div class="hero">
        <div class="container ">
            <div class="row ">
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
            <img src="<?=RUTA?>/assets/img/icons1.png" alt="" style="width: 60px; height: 50px;">
            <p>Distintos alimentos<br>
                distintas categorias</p>
        </div>
        <div class="columna__barra">
            <img src="<?=RUTA?>/assets/img/icons2.png" alt="" style="width: 60px; height: 45px;">
            <p>Consigue lo que buscas<br>
                antes de que caduque</p>
        </div>
        <div class="columna__barra">
            <img src="<?=RUTA?>/assets/img/icons3.png" alt="" style="width: 45px; height: 45px;">
            <p>Todos los productos<br>
                a mitad de precio</p>
        </div>
    </div>

    <div class="container__platillos bg-dark">
        <div class="titulo__platillos">
            <h1 class="encabezado"></h1>
        </div>

        <div class="wrap column-4 columns">
            <?php foreach($productos as $producto): ?>
                <div class="tarjeta-rest" style="background: url(<?php echo RUTA . '/storage/' . $producto['imagen']?>) center; background-size: cover;">
                    <div class="wrap-text_tarjeta-rest">
                        <h1><?php echo $producto['nombre_producto'];?></h1>
                        <div class="cta-wrap_tarjeta-rest">
                            <div class="container__fechas">
                                <span><span style="font-weight:bold;">pub:</span><?php echo $producto['fecha_publicacion'];?></span>
                                
                            </div>

                            <div class="container__fechas">
                                <span><span style="font-weight:bold;">Ven:</span><?php echo $producto['fecha_caducidad'];?> </span>
                                
                            </div>
                            <div class="precio_tarjeta-rest">
                                <span><?php echo $producto['precio_producto'];?>.Bs</span>
                            </div>
                            <div class="cta_tarjeta-rest">
                                <a href="">Añadir al carrito </a>
                                <a href="">Más Información </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="container__platillos bg-dark">
        <div class="titulo__platillos">
            <h1 class="encabezado"></h1>
        </div>
    </div>
</main>