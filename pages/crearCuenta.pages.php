    <!--
    <div class="bg-dark ">
        <a class="btn btn-warning bi bi-arrow-left-circle-fill border-bottom  p-1" href="index.php"> Volver</a>
    </div>
    -->
    <section>
        
        <div class="row no-gutters bg-dark">
            <!--columa de la imagen-->
            <div class="col-xl-5 col-lg-12">
                <div class=" p-7">
                    <img src="assets/img/logoBurger.png" alt="IMG" width="120%">
                </div>
            </div>
            <!--columna del formulario-->
            <div class="col-xl-7 col-lg-12 d-flex register-bg" >
                
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3"><img src="assets/img/user3.png" width="15%" /> Crear Cuenta</h1>
                    
                    <p class="text-muted mb-3">Ingrese la siguiente información para registrarse:</p>
                    <form id = "registroCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-horizontal" style="margin:0 auto" >                        
                     
                     <table class="formularioTabla">
                        
                            
                        <tr>
                            <td><i class="bi bi-person " ></i> &nbsp Nombres:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" class="form-control"  id="nombre" name="nombre" placeholder= "Ingrese sus nombres" oninput="this.value = this.value.replace(/[^a-z A-Z ñ-Ñ]/,'')" required minlength ="3" maxlength ="15" ></td>
                        
                        </tr>
                           
                        <tr>
                            <td><i class="bi bi-person" ></i> &nbsp Apellidos:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="apellido" name="apellido" placeholder= "Ingrese sus apellidos" oninput="this.value = this.value.replace(/[^a-z A-Z ñ-Ñ]/,'')" required minlength ="3" maxlength ="15" ></td>
                        </tr>
                        <tr class="filaTabla">
                            <td><i class="bi bi-credit-card-2-front"></i> &nbsp C.i:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="ci" name="ci" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  placeholder= "Ingrese C.I." pattern="^[0-9]+"  minlength ="7" maxlength ="10" min="1111111" max="9999999999"  required   ></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-mailbox" ></i> &nbsp Dirección:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="direccion" name="direccion" placeholder= "Ingrese dirección" required minlength ="10" maxlength ="70" ></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-phone"></i> &nbsp Teléfono:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" id="telefono" name="telefono" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  placeholder= "Ingrese número de teléfono"   required  min="4000000" max="79999999" pattern="^[0-9]+"  minlength ="7" maxlength ="8"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-envelope"></i> &nbsp Email:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="email" id="correo"name="email" placeholder= "ej: gpmcheco@mail.com" required maxlength="50"></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-key"  ></i> &nbsp Contraseña:<span class="text-danger">*</span></td> 
                            <td> <input class="inputAlinear" type="password" id="password" name="password" 
                            placeholder= "Ingrese contraseña" required minlength="6" maxlength="15" >
                            <input id="ocultarpass" type="checkbox"  style="display:none;" onclick="mostrarContrasena()">
                             <label for="ocultarpass" class="far fa-eye" id="togglePassword">  </label> </td>

                        </tr>

                        <tr>
                            <td><i class="bi bi-key"  ></i> Confirmar contraseña:<span class="text-danger">*</span></td>
                            <td><input class="inputAlinear" type="password" id="Cpassword" name="Cpassword" 
                            placeholder= "Repita contraseña" required minlength="6" maxlength="15">
                             <input id="ocultarpassRepe" type="checkbox"  style="display:none;" onclick="mostrarContrasenaConfi()">
                             <label for="ocultarpassRepe" class="far fa-eye" id="togglePassword"> </label>   </td>
                         

                        </tr>
                        
                    </table>
                    
                        <p class="text-muted mb-1">(*)campos obligatorios</p>

                        <div class="form-group mb-2">
                            <button type="button" id ="bottonDescartarr" class="btn btn-info mt-3 btn-setupC btn-space"  onclick="fntdescartarCuenta(1)" >Cancelar </button>
                    
                            <button  class="btn btn-warning mt-3 btn-setupA btn-space">Aceptar </button>
                            
                        </div>
                        <!--<small class="d-inline-block text-muted mt-3">Gracias y Bienvenido a Eat-Soon!!! </small>
                    
                        <tr>
                            <div class="form-group mb-2 ">
                                <button class="btn btn-info mt-3 btn-setupC btn-space" id ="bottonCancelar" onclick="reset()" >Cancelar </button>
                                <button class="btn btn-warning mt-3 btn-setupA btn-space" id="bottonAceptar" >Acceptar </button>
                            </div>
                        </tr>
                    -->
                    
                    </form>

                </div>
              </div>
                

        </div>
    </section>
    <script src="confirmarContraseña.js"></script>  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
<!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

