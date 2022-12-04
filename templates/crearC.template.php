<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?=RUTA?>/assets/css/styleRP.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    

    <title><?=$title?></title>
    <script type="text/javascript">  
        $(document).ready(function () {
        (function($) {
            $('#buscador').keyup(function () {
                    var ValorBusqueda = new RegExp($(this).val(), 'i');
                    $('.wrap .tarjeta-rest').hide();
                    $('.wrap .tarjeta-rest').filter(function () {
                        return ValorBusqueda.test($(this).text());
                    }).show();
                        })
            }(jQuery));
        });
    </script>
</head>
<body>
        <?php require $page; ?>


<script src="<?=RUTA?>/assets/js/paginacion.js"></script>        
<script src="<?=RUTA?>/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
</body>
</html>