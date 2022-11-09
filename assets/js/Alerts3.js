 swal({
     title: "Crea tu Cuenta!!!",
    text: "No te olvides llenar todos lo campos!!!",
    icon: "info",
     button: "Aceptar!",
  
   });
  
  function fntdescartarCuenta(id){

    swal({
      title: "Estas seguro?",
      text: "Se cancelara el registro de tu Cuenta!",
      icon: "warning",
      buttons: ["No", "Si"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById('registroCuenta').reset();

        
        registroCuenta.reset();
        
  
        swal("Se cancelo el registro con exito!!!", {
          icon: "success",
        });

      } else {
        swal("No se realizo nada...", {
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