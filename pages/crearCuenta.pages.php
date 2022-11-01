    
    <section>
        
        <div class="row no-gutters bg-dark">
            <!--columa de la imagen-->
            <div class="col-xl-5 col-lg-12">
                <div class=" p-7">
                    <img src="imagenes/logoBurger.png" alt="IMG" width="120%">
                </div>
            </div>
            <!--columna del formulario-->
            <div class="col-xl-7 col-lg-12 d-flex register-bg" >
                
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3"><img src="imagenes/user3.png" width="15%" /> Crear Cuenta</h1>
                    <!--
                    <p class="text-muted mb-3">Si ya tiene una cuenta, inicie sesion con:</p>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><i class="lead align-middle mr-2"></i>Vendedor</button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100" ><i class="lead align-middle mr-2"></i>Cliente</button>
                    </div>
                    -->
                    <p class="text-muted mb-3">Ingrese la siguiente información para registrarte:</p>
                    <form action="" method="POST" class="form-horizontal" style="margin:0 auto" >                        
                     
                    <table class="formularioTabla">
                        
                            
                        <tr>
                            <td><i class="bi bi-person " ></i>Nombres:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" class="form-control"  id="nombre" name="nombre" placeholder= "Ingrese sus nombres" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required minlength ="3" maxlength ="15" ></td>
                        
                        </tr>
                           
                        <tr>
                            <td><i class="bi bi-person" ></i>Apellidos:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="apellido" name="lastname" placeholder= "Ingrese sus apellidos" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required minlength ="3" maxlength ="15" ></td>
                        </tr>
                        <tr class="filaTabla">
                            <td><i class="bi bi-credit-card-2-front"></i>C.i:<span class="number-danger">*</span></td>
                            <td><input class="inputAlinear" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="ci" name="ci" placeholder= "Ingrese C.I."   required   pattern="^[0-9]+"  minlength ="7" maxlength ="10"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-mailbox" ></i>Dirección:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="direccion" name="dirección" placeholder= "Ingrese dirección" required minlength ="10" maxlength ="50" ></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-phone"></i>Telefono:<span class="number-danger">*</span></td>
                            <td><input class="inputAlinear" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="telefono" name="telefono" placeholder= "Ingrese número de telefono"   required  min="4444444" max="77777777" pattern="^[0-9]+"  minlength ="7" maxlength ="8"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope"></i>Email:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="email" id="correo"name="email" placeholder= "ej: gpmcheco@mail.com" required maxlength="20"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-key"  ></i>Contraseña:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="password" id="password"name="password" placeholder= "Ingrese contraseña" required minlength="6" maxlength="15"></td>
                        </tr>
                    </table>
                        <p class="text-muted mb-1">(*)campos obligatorios</p>

                        <div class="form-group mb-2">
                            <button class="btn btn-info mt-3 " >Descartar </button>
                            <button class="btn btn-warning mt-3 ">Registrar</button>
                        </div>
                        <small class="d-inline-block text-muted mt-3">Gracias y Bienvenido a Eat-Soon!!! </small>
                    </form>
                    <!--
                    <form action="" method="POST" class="form-horizontal" style="margin:0 auto" >                        
                        
                        <div class="row g-4 align-items-center mb-2">
                            <div class="col-auto">
                                <label for="nombre" class="form-label "><i class="bi bi-person" ></i> Nombre: <span class="text-danger">*</span></label></div>
                            <div class="col-auto">
                                <input type="text"  class="primero form-control" name="nombre" id="nombre" placeholder= "Ingrese nombre"  
                                oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-auto">
                                <label class=""><i class="bi bi-person" ></i> Apellidos: <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="primero form-control" name="apellidos" id="apellidos" placeholder= "Ingrese apellidos"  
                                oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-11 align-items-center mb-2">
                            <div class="col-auto">
                                <label class="font-weight-bold"><i class="bi bi-credit-card-2-front"></i> C.i:    <span class="text-danger">* </span></label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="primero form-control" name="ci" id="ci" placeholder= "Ingrese c.i."  
                                oninput="this.value = this.value.replace(/[^0-9]/,'')" required maxlength="10">
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mb-2">
                            <div class="col-auto">
                                <label class="font-weight-bold"><i class="bi bi-mailbox" ></i> Dirección: <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="primero form-control" name="direccion" id="direccion" placeholder= "Ingrese Dirección"  required maxlength="50">
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-4 align-items-center mb-2">
                            <div class="col-auto">
                                <label class="font-weight-bold"><i class="bi bi-phone"></i> Telefono: <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto">
                                <input type="text" class="primero form-control" name="telefono" id="telefono" placeholder= "Ingrese numero telefonico"  
                                oninput="this.value = this.value.replace(/[^0-9]/,'')" required maxlength="8">
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-10 align-items-center mb-2">
                            <div class="col-auto">
                                <label class="font-weight-bold"><i class="bi bi-envelope"></i> Email: <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto">
                                <input type="email" class="form-control" name="correo" id="correo" placeholder= "ej: gpmcheco@mail.com" required maxlength="20">
                                <div class="correo text-danger"></div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center mb-2">
                            <div class="col-auto">
                                <label class="font-weight-bold"><i class="bi bi-key"  ></i> Contraseña: <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-auto">
                                <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder= "Ingrese Contraseña"  required minlength="6" maxlength="15">
                                <div class="password-danger"></div>
                            </div>
                        </div>

                        <p class="text-muted mb-2">(*)campos obligatorios</p>

                        <div class="form-group mb-2">
                            <button class="btn btn-info mt-3 width-100">Descartar</button>
                            <button class="btn btn-warning mt-3 width-100">Registrar</button>
                        </div>

                        <small class="d-inline-block text-muted mt-3">Gracias y bienvenido a Eat-Soon</small>

                    </form>
                    -->
                </div>
              </div>
                

            
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

