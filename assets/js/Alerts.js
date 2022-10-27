
/*La funcion para que se muestre el mensaje hacien click en el boton*/


 /*   var retVal = confirm("¿Seguro desea continuar?");
    if( retVal == true ){
        document.write ("OK, REGISTRO ALMACENADO");
        return true;
    }else{
        document.write ("NO SE GUARDÓ EL REGISTRO");
        return false;
    }
*/








function fntdescartar(id){

    swal({
      title: "Estas seguro?",
      text: "Se cancelara el registro del producto!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        document.getElementById("imagen").value = "";
        registroProducto.reset();
  
        swal("Se cancelo el registro con exito!!!", {
          icon: "success",
        });
      } else {
        swal("No se realizo nada!");
      }
    });
  
  }
  
  
  
  swal({
      title: "Bienvenido a EatSoon!",
      text: "Disfruta!!!",
      icon: "success",
      button: "Continuar!",
  
    });
  
  /* 
  Codigo del menaje para los elminiar productos o cancelar registro
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      swal("Poof! Your imaginary file has been deleted!", {
        icon: "success",
      });
    } else {
      swal("Your imaginary file is safe!");
    }
  });
  */
  
  
  /*
  Swal.fire({
      title:'Error',
      text: 'Contrasena Incorrecta!!!',
      icon: 'error',
      confirmButtonText: 'Aceptar',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  });
  */
  
  /*
  Swal.fire({
      title:'Error',
      text: 'Usuario Incorrecta!!!',
      icon: 'error',
      confirmButtonText: 'Aceptar',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  });
  */
  
  
  /*
  Swal.fire({
      title:'Compra Exitosa',
      text: 'Disfruta tu pedido!!!',
      icon: 'success',
      confirmButtonText: 'Continuar',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  });
  
  */
  
  /*
  Swal.fire({
      title:'Datos Incompletos',
      text: 'Por favor completa toda la informacion...',
      icon: 'question',
      confirmButtonText: 'Continuar',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  });
  */
  /*
  Swal.fire({
      title:'Datos Incompletos',
      text: 'Por favor completa toda la informacion...',
      icon: 'question',
      confirmButtonText: 'Continuar',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  });
  */
  
  /*
  Swal.fire({
      title:'Datos Incompletos',
      text: 'Por favor completa toda la informacion...',
      icon: 'question',
      confirmButtonText: 'Continuar',
      footer: 'Verifica que todos los datos esten llenados...',
      backdrop: true,
      timer: 10000,
      timerProgressBar: true,
      allowOutsideClick: true,
      allowEscapeKey: true,
      allotEnterKey: true,
      StopKeydownPropagation: false,
  
  
  });
  */