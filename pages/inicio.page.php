<main>
    <div class="hero">
        <div class="container ">
            <div class="row ">
                <div class="wrap-contenido__hero">
                    <div class="contenido__hero">
                        <h2>¿Que te apetece?</h2>
                        <p>búscalo aquí</p>

                    </div>
                    <div class="input-group rounded">
                        <input type="text" class="form-control rounded" placeholder="¿Que te gustaria probar?"oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required
                        id="buscador" maxlength="40">
                        <span class="input-group border-0" id="search-addon">
                        <i class="bi bi-search" style="color:black; position:absolute; right:10px; bottom: 7px"></i>
                        </span>
                        
                    </div>
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
                        <h2><?php echo $producto['nombre_producto'];?></h2>
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
                                <button class="btn text-light" style="padding: .25rem 1rem;
                                border-radius: 4px;
                                background-color: goldenrod;
                                color: white;
                                font-weight: bold;
                                text-align: center;">Añadir al carrito </button>

                                <utton type="button" class="btn text-light " data-bs-toggle="modal" data-bs-target="#my<?php echo $producto['id_producto'];?>" style="padding: .25rem 1rem;
                                border-radius: 4px;                              background-color: goldenrod;
                                color: white;
                                font-weight: bold;
                                text-align: center;">Más Información </button>                           
                            </div>
                            <!-- código modal -->                                    
                            <div class="modal fade" id="my<?php echo $producto['id_producto'];?>" >
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5"><?php echo $producto['nombre_producto'];?></h1>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            </span> <?php
                                                $aux = $producto['desc_producto'];
                                                if($aux != null)
                                                    echo $producto['desc_producto'];
                                                else
                                                    echo "El producto no tiene informacion adicional";
                                             ?></span>    
                                             <p> </p>
                                             <span><span style="text-transform:uppercase; color:goldenrod;">publicacion:  </span><?php echo $producto['fecha_publicacion'];?></span>
                                             <p> </p>
                                             <span><span style="text-transform:uppercase; color:goldenrod;">vencimiento:  </span><?php echo $producto['fecha_caducidad'];?></span>                                    
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
                            <!-- fin código modal -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center pt-4">
                <li class="page-item">
                    <a class="page-link " href="#" aria-label="Previous" id="pag-anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#" id="pag-uno">1</a></li>
                <li class="page-item"><a class="page-link" href="#" id="pag-dos">2</a></li>
                <li class="page-item"><a class="page-link" href="#" id="pag-tres">3</a></li>
                <li class="page-item"><a class="page-link" href="#" id="pag-cuatro">4</a></li>
                <li class="page-item"><a class="page-link" href="#" id="pag-cinco">5</a></li>
                <li class="page-item">
                <a class="page-link " href="#" aria-label="Next" id="pag-siguiente">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
        
    </div>
    
</main>
<!-- <footer>
    <div style="background-color:red; height: 17.7vh;"></div>
</footer> -->