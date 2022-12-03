<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        (function($) {
            $('#buscador').keyup(function() {
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.wrap .tarjeta-rest').hide();
                $('.wrap .tarjeta-rest').filter(function() {
                    return ValorBusqueda.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>
<main>
    <div style="background-image: url('<?= RUTA ?>/assets/img/fondo tabla.jpeg');background-size: cover;height: 90vh;background-position: center;background-repeat: no-repeat;width: 100%;">
        <div class="container ">
            <div class="row ">
                <h1 class="mb-5 mt-5 text-white">Lista de solicitud de pedidos</h1>
                <div>
                
                <?php foreach ($pedidos as $pedido) : ?>
                    <a data-bs-toggle="modal" data-bs-target="#pedido<?php echo($pedido['codPedido']);?>">
                        <div class="card mb-4" style="background-color: #f8b318;font-size: x-large;padding: 10px;box-shadow: 1px 1px 1px #382804;">
                            <table>
                                <tr>
                                    <th>
                                        <h5>Pedido</h5>
                                    </th>
                                    <th>
                                        <h5>#<?php echo($pedido['codPedido']);?></h5>
                                    </th>
                                    <th>
                                        <h5>Usuario:<?php echo($pedido['usuario_CI']);?></h5>
                                    </th>
                                    <th>
                                        <h5></h5>
                                    </th>
                                    <th>
                                        <h5>Fecha:<?php echo($pedido['fecha_Pedido']);?></h5>
                                    </th>
                                    <th>
                                        <h5></h5>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </a>

                    <!-- código modal -->
                    <div class="modal fade" id="pedido<?php echo($pedido['codPedido']);?>">
                        <div class="modal-dialog modal-lg" style="    transform: translate(0, 100%);min-height: 15rem; min-width: 71%; margin: auto;">
                            <div class="modal-content bg-dark">
                                <div class="modal-body">
                                    <div class="row justify-content-center text-white">
                                        <h1>Información sobre el Pedido</h1>
                                        <div class="col-5">
                                        <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <div><h5>Pedido #<?php echo($pedido['codPedido']);?></h5></div>
                                                    <div><h5>Usuario:<?php echo($pedido['usuario_CI']);?></h5></div>
                                                    <div><h5>Fecha: <em><?php echo($pedido['fecha_Pedido']);?></em></h5></div>
                                                    <img src="<?= RUTA ?>/assets/img/bien amarillo.jpeg" width="100" alt="">
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="row justify-content-center">
                                                <div class="col-8">
                                                    <table class="table">
                                                        <tr>
                                                            <th class="table-dark">
                                                                <h4><b>Item</b></h4>
                                                            </th>
                                                            <th class="table-dark">
                                                                <h4><b>Cantidad</b></h4>
                                                            </th>
                                                            <th class="table-dark">
                                                                <h4><b>Total</b></h4>
                                                            </th>
                                                        </tr>
                                                        <tbody>
                                                            <tr>
                                                                <td class="table-dark" >
                                                                    <h5><?php echo($pedido['nombre_producto']);?></h5>
                                                                </td>
                                                                <td class="table-dark text-center">
                                                                    <h5><?php echo($pedido['tatal_Pedido']);?></h5>
                                                                </td>
                                                                <td class="table-dark">
                                                                    <h5><?php echo($pedido['precio_producto']);?></h5>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <hr>
                                                    <div>
                                                        <table class="table">
                                                            <tr>
                                                                <th class="table-dark">
                                                                    <h5>Total productos:</h5>
                                                                </th>
                                                                <th class="table-dark text-left">
                                                                    <h5><?php echo($pedido['tatal_Pedido']);?></h5>
                                                                </th>
                                                                <th class="table-dark">
                                                                    <h5><?php echo((int)$pedido['tatal_Pedido'] * floatval($pedido['precio_producto']));?> Bs</h5>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- fin código modal -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center pt-4 m-0">
                <li class="page-item">
                    <?php //if($pagina>1):
                    ?>
                    <a class="page-link " href="pedidos.php?page=<?php echo $pagina - 1 ?>" aria-label="Previous" id="pag-anterior">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                    <?php //endif;
                    ?>
                </li>


                <?php for ($i = 1; $i <= $numPaginas; $i++) : ?>
                    <?php if ($i <= 5) : ?>
                        <li class="page-item"><a class="page-link" href="pedidos.php?page=<?php echo $i ?>" id="pag-uno"><?php echo $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>



                <?php  //if($pagina<$numPaginas):
                ?>
                <li class="page-item"><a class="page-link " href="pedidos.php?page=<?php echo $pagina + 1 ?>" aria-label="Next" id="pag-siguiente">
                        <span aria-hidden="true">&raquo;</span>
                    </a></li>
                <?php //endif;
                ?>

            </ul>
        </nav>
    </div>
</main>
<footer class="bg-dark">
    <div style="height: 6vh;"></div>
</footer>