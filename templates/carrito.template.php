<!-- modal carrito, pero mejor si es offcanvas -->
<?php
$total=0;
?>
<div class="modal fade" id="demo">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" style="color:white;">Mi Carrito</h1>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <Table class="table table-dark">
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
                    <?php $i=1; ?>
                        <?php foreach ($enCarrito as $carito) : ?>
                            <tr>
                                <th scope="row" id="<?php echo ($carito['carrito_id']);?>"><?php echo($i);?></th>
                                <td><img src="<?php echo RUTA . '/storage/' . $carito['imagen'] ?>" width="30" /> <?php echo ($carito['nombre_producto']); ?></td>
                                <td><?php echo ($carito['cantidad']); ?></td>
                                <td>
                                    <div style="display: inline-flex;">
                                        <form action="carrito.php" method="post">
                                            <input type="hidden" name="action" value="menos" />
                                            <input type="hidden" name="page" value="<?php echo ($_GET['page']) ?>" />
                                            <input type="hidden" name="carrito_id" value="<?php echo $carito['carrito_id']; ?>" />
                                            <button type="submit" style="color:white;background: goldenrod;">-</button>
                                        </form>
                                        <form action="carrito.php" method="post">
                                            <input type="hidden" name="action" value="mas" />
                                            <input type="hidden" name="page" value="<?php echo ($_GET['page']) ?>" />
                                            <input type="hidden" name="carrito_id" value="<?php echo $carito['carrito_id']; ?>" />
                                            <button type="submit" style="color:white;background: goldenrod;">+</button>
                                        </form>
                                    </div>
                                </td>
                                <td><?php 
                                $parcial= ((int)$carito['cantidad'] * (float)$carito['precio_producto']);
                                $total= $total + $parcial;
                                echo ($parcial); ?></td>
                                <td>
                                    <form action="carrito.php" method="post">
                                        <input type="hidden" name="action" value="delete" />
                                        <input type="hidden" name="page" value="<?php echo ($_GET['page']) ?>" />
                                        <input type="hidden" name="carrito_id" value="<?php echo $carito['carrito_id']; ?>" />
                                        <button type="submit" class="bi bi-trash"></button>
                                    </form>
                                </td>
                            </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </Table>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <tr>
                    <td>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="action" value="vaciar" />
                        <input type="hidden" name="page" value="<?php echo ($_GET['page']) ?>" />
                        <button type="submit" class="btn btn-danger link-light" data-bs-dismiss="modal" style="background: #ffc107; padding: .25rem 1rem;
                    border-radius: 4px; color: white; font-weight: bold; text-align: center;">Vaciar Todo</button>
                    </form>
                    </td>

                    <p class="link-light">Total Productos: <?php echo($contadorCarrito?$contadorCarrito:0) ?></p>

                    <p class="link-light">Total: <?php echo($total) ?> Bs.</p>

                    <td>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="action" value="comprar" />
                        <input type="hidden" name="page" value="<?php echo ($_GET['page']) ?>" />
                        <button type="submit" class="btn btn-success link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;border-radius: 4px; color: white; font-weight: bold;
                    text-align: center;">Comprar</button>
                    </form>
                    </td>
                </tr>
            </div>
        </div>
    </div>
</div>

<!-- fin cuerpo modal -->