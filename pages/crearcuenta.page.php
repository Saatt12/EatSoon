<section>
        <div class="row no-gutters bg-dark">
            <!--columa de la imagen-->
            <div class="col-xl-5 col-lg-12">
                <div class=" p-7">
                    <img src="img/logoBurger.png" alt="IMG" width="120%">
                </div>
            </div>
        </div>
            <!--columna del formulario para crear cuenta-->
            <div class="col-xl-7 col-lg-12 d-flex register-bg" >
                
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3"><img src="img/user3.png" width="15%" /> Crear Cuenta</h1>
                    <p class="text-muted mb-3">Ingrese la siguiente información para registrarte:</p>
                    <form action="" method="POST" class="form-horizontal" style="margin:0 auto" >                        
                     
                    <table class="formularioTabla">
                        <tr>
                            <td><i class="bi bi-person " ></i>Nombres:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="nombre" name="nombre" placeholder= "Ingrese sus nombres" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-person" ></i>Apellidos:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="apellido" name="lastname" placeholder= "Ingrese sus apellidos" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required></td>
                        </tr>
                        <tr class="filaTabla">
                            <td><i class="bi bi-credit-card-2-front"></i>C.i:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="ci" name="ci" placeholder= "Ingrese c.i" oninput="this.value = this.value.replace(/[^0-9]/,'')" required maxlength="10"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-mailbox" ></i>Dirección:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="direccion" name="dirección" placeholder= "Ingrese dirección" required maxlength="50"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-phone"></i>Telefono:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="telefono" name="telefono" placeholder= "Ingrese número de telefono" oninput="this.value = this.value.replace(/[^0-9]/,'')" required maxlength="8"></td>
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
                            <button class="btn btn-info mt-3 ">Descartar</button>
                            <button class="btn btn-warning mt-3 ">Registrar</button>
                        </div>
                    <small class="d-inline-block text-muted mt-3">Bienvenido a Eat-Soon</small>
                    </form>
                    
                </div>
              </div>
        </div>
    </section>