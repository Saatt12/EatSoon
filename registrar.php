<!DOCTYPE html>
<html lang="es">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eat-Soon</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"  >
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <a href="index.php" class="col-12 btn btn-warning d-flex  ; bi bi-arrow-left-circle-fill " > __Inicio Vendedor</a>
    

    <script src="js/main.js"></script>
    
</head>
    <div class=" bg-dark ">
        <h2 style="text-align:center; color: rgb(218, 165, 32);" >  Registra tu Producto</h2>
        <div class="row">
        </div>
            <div style="text-align:center" class="col-lg-12 ">
                
                <img class="mt-2; img-fluid; bi bi-clipboard" style="color: white ;" src="img/fotoRegistrar.svg" width="10%" /> 
            </div> 
        </div>
    </div>
    
<body>
    <section class=" d-flex justify-content-center align-items-center bg-dark">

        <div class="mt-3 card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">     
            <div class="mb-1">
                <?php //Este es el formulario donde se captura los datos que el usuario introduce de la H3?>
                <form id = "registroProducto" action="conect.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="nombre_producto"><i class="bi bi-bag-check-fill"></i> NOMBRE DEL PRODUCTO</label>
                        <input type="text" maxlength ="20" class="form-control" name="nombre_producto" id="nombre_producto" placeholder= "Ingrese nombre del producto"  
                        oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required>
                        <div class="text-danger"></div>  
                    </div>
                    <div class="mb-4">
                        <label for="cantidad"><i class="bi bi-cart-plus-fill"></i> CANTIDAD</label>
                        <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "2" name="cantidad" class="form-control" id="cantidad" 
                        placeholder= "Unidades" required min="1" max="99" pattern="^[0-9]+"   oninput="this.value = this.value.replace(/[^a-z A-Z] /,'-')>
                        <div class="number-danger"></div> 
                    </div>
                    <div class="mb-4">
                        <label for="precio_producto"><i class="bi bi-cash-coin"></i> PRECIO</label>
                        <input type="number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"   maxlength = "3" step="0.01" name="precio_producto" class="form-control" id="precio_producto" 
                        placeholder= ".Bs" required min="1" max="500"  pattern="^[0-9]+">
                        <div class="number-danger; "></div> 
                        
                    </div>

                    <div class="mb-4">
                        <?php
                         date_default_timezone_set("America/Asuncion");
                             $fechamin = date("Y-m-d");
                            
                             $fechamax = date("Y-m-d",strtotime($fechamin."+ 30 day")); 
                
                        ?>

                        <label for="fecha_caducidad"><i class="bi bi-calendar2-day-fill"></i> FECHA DE VENCIMIENTO</label>
                        <input type="date" name="fecha_caducidad" min="<?=$fechamin;?>" max="<?=$fechamax;?>" class="form-control" id="fecha_caducidad" required >
                        <div class="date-danger"></div> 
                    </div>
                    
                    <div class="mb-4">
                        <label for="imagen"><i class="custom-file-upload"></i> IMAGEN DEL PRODUCTO</label>
                        <input type="file" class="form-control" name="imagen" id="archivoInput" onchange="return validarExt()" required></input>
                        <div id ="visorArchivo" class="image-danger"></div>  
                    </div> 

                    <div class="mb-4">
                        <label for="desc_producto"> <i class="bi bi-question-square-fill" required></i> INFORMACIÓN ADICIONAL</label>
                        <textarea name="desc_producto" id="desc_producto" class="form-control" placeholder="inf.." maxlength="100"></textarea>
                        <div class="mensaje text-danger"></div>
                    </div>                                 
                    <div class="mb-2">
                        <button id ="botton" class="col-12 btn btn-warning d-flex justify-content-between ">
                            <span>Publicar </span><i id="icono" class="bi bi-check-lg "></i>
                        </button>
                    </div>

                       

                </form>
                <div class="mb-2">
                    <button type= "reset" id ="bottonDescartar" class="col-12 btn btn-dark d-flex justify-content-between" onclick="fntdescartar(1)">
                            <span>Descartar </span><i id="iconoDescartar" class="bi bi-x-lg"></i>  
                        </button>
                </div>  
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/Alerts2.js"></script>  <!--Conecta el js-->
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