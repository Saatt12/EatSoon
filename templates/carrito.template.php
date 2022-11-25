<!-- modal carrito, pero mejor si es offcanvas -->
<div class="modal fade" id="demo" >
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
                        <tr>
                            <th scope="row">1</th>
                            <td>(imagen)Leche Pil</td>
                            <td>cantidad</td>
                            <td>- +</td>
                            <td>total en carrito</td>
                            <td><a href="#" class="bi bi-trash"></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>(imagen)Mermelada del Valle</td>
                            <td>cantidad</td>
                            <td>- +</td>
                            <td>total en carrito</td>
                            <td><a href="#" class="bi bi-trash"></a></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>(imagen)atun Van Camps</td>
                            <td>cantidad</td>
                            <td>- +</td>
                            <td>total en carrito</td>
                            <td><a href="#" class="bi bi-trash"></a></td>
                        </tr>
                    </tbody>
                </Table>                                   
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <tr>
                    <td><button type="button" class="btn btn-danger link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;
                    border-radius: 4px; color: white; font-weight: bold; text-align: center;">Vaciar Todo</button></td>

                    <p class="link-light">Total Productos: 3</p>
                                                   
                    <p class="link-light">Total: (cantidad)Bs.</p>

                    <td><button type="button" class="btn btn-success link-light" data-bs-dismiss="modal" style="padding: .25rem 1rem;border-radius: 4px; color: white; font-weight: bold;
                    text-align: center;">Comprar</button></td>
                </tr>
            </div>
        </div>
    </div>
</div>  
                                  
<!-- fin cuerpo modal -->