swal({
  title: "Registra tu pruducto!",
  text: "No te olvides llenar todos lo campos!!!",
  icon: "info",
  button: "Aceptar!",

});

function validar() {

  //Almacenamos los valores
  nombre = $('#cantidad').val();

  //Comprobamos la longitud de caracteres
  if (nombre.length < 2) {
    return true;
  }
  else {
    alert('Maximo 2 caracteres');
    return false;
  }
}