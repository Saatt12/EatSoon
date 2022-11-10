swal({
    title: "Registra tu producto!",
    text: "No te olvides llenar todos lo campos!!!",
    icon: "info",
    closeOnClickOutside: false,
    timer: 5000,
    button: "Aceptar!",
  
  });
  
  function fntdescartar(id){
    buttons: ["Cancelar", "Aceptar"],
    swal({
      title: "Estas seguro?",
      text: "Se cancelara el registro del producto!",
      icon: "warning",
      closeOnClickOutside: false,

      buttons: ["Cancelar", "Aceptar"],
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById('registroProducto').reset();
        document.getElementById("imagen").value = "";
        registroProducto.reset();

  
        swal("Se cancelo el registro con exito!!!", {
          closeOnClickOutside: false,

          icon: "success",
        });
      } else {
        swal("No se realizó nada...", {
          closeOnClickOutside: false,

          icon: "info",
        });
      }
    });
  



  }
 