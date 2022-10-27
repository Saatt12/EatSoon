<!DOCTYPE html>
<html lang="es">
     
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat-Soon</title>
    <link href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="<?=RUTA?>/assets/js/main.js"></script>
    <script>
        function toggleButton()  
        {
            var nom = $('#nombre_producto').val();
            var can = $('#cantidad').val();
            var pre = $('#precio').val();
            var fec = $('#fecha_caducidad').val();
            var arc = $('#archivoInput').val();
            var des = $('#desc_producto').val();

            if (nom && can && pre && fec && arc && des) {
                $('#botton').attr('disabled', false);
            } else {
                $('#botton').attr('disabled', true);
            }
        }
          

    </script>
</head>
<body>

<a href="index.php" class="col-12 btn btn-warning d-flex" > <span class="bi bi-arrow-left-circle-fill"></span> __Inicio Vendedor</a>

        <?php require $page; ?>


<script src="<?=RUTA?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?=RUTA?>/assets/js/Alerts2.js"></script>  <!--Conecta el js-->
</body>
</html>


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