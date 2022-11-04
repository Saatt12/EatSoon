    
    <section>
        
        <div class="row no-gutters bg-dark">
            <!--columa de la imagen-->
            <div class="col-xl-5 col-lg-12">
                <div class=" p-7">
                    <img src="img/logoBurger.png" alt="IMG" width="120%">
                </div>
            </div>
            <!--columna del formulario-->
            <div class="col-xl-7 col-lg-12 d-flex register-bg" >
                
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3"><img src="img/user3.png" width="15%" /> Crear Cuenta</h1>
                    
                    <p class="text-muted mb-3">Ingrese la siguiente información para registrarte:</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal" style="margin:0 auto" >                        
                     
                    <table class="formularioTabla">
                        
                            
                        <tr>
                            <td><i class="bi bi-person " ></i>Nombres:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" class="form-control"  id="nombre" name="nombre" placeholder= "Ingrese sus nombres" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required minlength ="3" maxlength ="15" ></td>
                        
                        </tr>
                           
                        <tr>
                            <td><i class="bi bi-person" ></i>Apellidos:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="apellido" name="apellido" placeholder= "Ingrese sus apellidos" oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required minlength ="3" maxlength ="15" ></td>
                        </tr>
                        <tr class="filaTabla">
                            <td><i class="bi bi-credit-card-2-front"></i>C.i:<span class="number-danger">*</span></td>
                            <td><input class="inputAlinear" id="ci" name="ci" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  placeholder= "Ingrese C.I."   required   pattern="^[0-9]+"  minlength ="7" maxlength ="10"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-mailbox" ></i>Dirección:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="direccion" name="direccion" placeholder= "Ingrese dirección" required minlength ="10" maxlength ="50" ></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-phone"></i>Telefono:<span class="number-danger">*</span></td>
                            <td><input class="inputAlinear" id="telefono" name="telefono" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  placeholder= "Ingrese número de telefono"   required  min="4444444" max="77777777" pattern="^[0-9]+"  minlength ="7" maxlength ="8"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope"></i>Email:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="email" id="correo"name="email" placeholder= "ej: gpmcheco@mail.com" required maxlength="20"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-key"  ></i>Contraseña:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="password" id="password"name="password" placeholder= "Ingrese contraseña" required minlength="6" maxlength="15"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-key"  ></i>Confirmar contraseña:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="password" id="Cpassword"name="Cpassword" placeholder= "Ingrese contraseña" required minlength="6" maxlength="15"></td>
                        </tr>
                    </table>
                        <p class="text-muted mb-1">(*)campos obligatorios</p>

                        <div class="form-group mb-2">
                            <button class="btn btn-info mt-3 " >Descartar </button>
                            <button class="btn btn-warning mt-3" >publicar </button>
                        </div>
                        <!--<small class="d-inline-block text-muted mt-3">Gracias y Bienvenido a Eat-Soon!!! </small>-->
                    
                    </form>

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

