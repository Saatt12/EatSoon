//login

  
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

