
<body>
    <div class="Caja">
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
   <h1 class="animate__animated animate__backInLeft">Inicia Sesión</h1>
   <?php if (isset($_GET['m'])) {
        ?>
        <div class="alert alert-success text-center" role="alert">
        <?php echo($_GET['m'])?>
        </div>
        <?php }?>
   <p class="blanco">   Correo: 
      <input type="email" name="correo" placeholder="Ingrese su correo" 
         required minlength ="3" maxlength ="40" ></p>

   <p class="blanco">   Contraseña:
         <input id="ocultarpass" type="checkbox"  style="display:none;" onclick="mostrarContrasena()">
              <label for="ocultarpass" class="fa fa-eye" id="togglePassword">  </label>

              
         <td> <input  type="password" id="password" name="password" 
              placeholder= "Ingrese contraseña" required minlength="6" maxlength="15" >
           </td>
    </p>


   <input class="btn btn-success" type="submit" value="Ingresar">
   
   </form>

   <?php if(isset($_GET["error"])): ?>
      <!-- Poner modal de errores -->
      <center><p><?php echo $_GET["error"]?></p></center>
   <?php endif; ?>
</div> 

 <script>
          function mostrarContrasena() {
    var temp = document.getElementById("password");
    if (temp.type === "password") {
        temp.type = "text";
    }
    else {
        temp.type = "password";
    }
}

    </script>
</body>
</html>