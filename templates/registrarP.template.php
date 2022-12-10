<!DOCTYPE html>
<html lang="es">
     
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat-Soon</title>
    <link href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styles.css">

</head>
<body>


        <?php require $page; ?>
        <script src="<?=RUTA?>/assets/js/main.js"></script>
    <script src="<?=RUTA?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript">

function validarExt()
{
    var archivoInput = document.getElementById('archivoInput');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.png|.jpg|.jpeg|.svg)$/i;
    if(!extPermitidas.exec(archivoRuta)){
        alert('Por favor, seleccione una imagen');
        archivoInput.value = '';
        return false;
    }

    else
    {
        //PRevio de las extenciones
        if (archivoInput.files && archivoInput.files[0]) 
        {
            var visor = new FileReader();
        }
    } 
}
</script>
</body>
</html>


