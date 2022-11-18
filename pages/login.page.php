
<body>
    <div class="Caja">
   <form action="" method="post">
   <h1 class="animate__animated animate__backInLeft">Inicia Sesión</h1>
   <p class="blanco">   Usuario: 
      <input type="text" name="usuario" placeholder="ingrese su nombre" placeholder= "Ingrese sus nombres" 
          oninput="this.value = this.value.replace(/[^\a-\z\A-\Z\ñ\Ñ ]/g,'')" required minlength ="3" maxlength ="15" ></p>

   <p class="blanco">   Contraseña:
         <input id="ocultarpass" type="checkbox"  style="display:none;" onclick="mostrarContrasena()">
              <label for="ocultarpass" class="fa fa-eye" id="togglePassword">  </label>

              
         <td> <input  type="password" id="password" name="password" 
              placeholder= "Ingrese contraseña" required minlength="6" maxlength="15" >
           </td>
    </p>


   <input class="btn btn-success" type="submit" value="Ingresar">
   
   </form>
</div> 


</body>
</html>