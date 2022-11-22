//login
swal({
     title: "Inicia Sesión!",
    text: "Disfruta de EatSoon!!!",
    icon: "info",
    closeOnClickOutside: false,
    timer: 5000,
     button: "Aceptar!",
  
   });
  
  function fntdescartarCuenta(id){

    swal({
      title: "¿Estás seguro?",
      text: "Se cancelará el registro de tu Cuenta!",
      icon: "warning",
      closeOnClickOutside: false,
      buttons: ["No", "Si"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById('registroCuenta').reset();

        
        registroCuenta.reset();
        
  
        swal("Se canceló el registro con éxito!!!", {
          closeOnClickOutside: false,
          icon: "success",
        });

      } else {
        swal("No se realizo nada...", {
          closeOnClickOutside: false,
          icon: "info",
        });

      }
    });
  
  }




  function mostrarContrasena() {
    var temp = document.getElementById("password");
    if (temp.type === "password") {
        temp.type = "text";
    }
    else {
        temp.type = "password";
    }
}
function mostrarContrasenaConfi() {
  var temp = document.getElementById("Cpassword");
  if (temp.type === "password") {
      temp.type = "text";
  }
  else {
      temp.type = "password";
  }
}


function mensajecontrarepetida(id) {
  swal({
    title: "Las contraseñas no son iguales!!!",
   text: "Por favor verfica las contraseñas introducidas...",
   icon: "info",
   closeOnClickOutside: false,
   timer: 10000,
    button: "Aceptar!",
 
  });
}

// function Numeros(string){//Solo numeros
//   var out = '';
//   var filtro = '1234567890';//Caracteres validos

//   //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
//   for (var i=0; i<string.length; i++)
//      if (filtro.indexOf(string.charAt(i)) != -1) 
//            //Se añaden a la salida los caracteres validos
//      out += string.charAt(i);

//   //Retornar valor filtrado
//   return out;
// } 