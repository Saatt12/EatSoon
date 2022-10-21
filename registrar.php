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
    
    <a href="PageIni.php" class="col-12 btn btn-warning d-flex  ; bi bi-arrow-left-circle-fill " > Inicio Vendedor</a>
    

    <script src="js/main.js"></script>
    
</head>
    <div class=" bg-dark ">
        <h2 style="text-align:center; color: rgb(255, 255, 255);" >  Registra tu Producto</h2>
        <div class="row">
        </div>
            <div style="text-align:center" class="col-lg-12 ">
                
                <img class="mt-2; img-fluid; bi bi-clipboard" style="color: white ;" src="imagenes/clipboard2.svg" width="10%" /> 
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
                        <label for="nombre_producto"><i class="bi bi-egg-fill"></i> NOMBRE DEL PRODUCTO</label>
                        <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" placeholder= "Ingrese nombre del producto"  
                        oninput="this.value = this.value.replace(/[^a-z A-Z]/,'')" required>
                        <div class="text-danger"></div>  
                    </div>
                    <div class="mb-4">
                        <label for="cantidad"><i class="bi bi-file-earmark-binary-fill"></i>CANTIDAD</label>
                        <input type="number" name="cantidad" class="form-control" id="cantidad" 
                        placeholder= "Unidades" required min="1" pattern="^[0-9]+">
                        <div class="number-danger"></div> 
                    </div>
                    <div class="mb-4">
                        <label for="precio_producto"><i class="bi bi-credit-card-fill"></i>PRECIO</label>
                        <input type="number" name="precio_producto" class="form-control" id="precio_producto" 
                        placeholder= ".Bs"required min="1" pattern="^[0-9]+">
                        <div class="number-danger; "></div> 
                    </div>
                    <div class="mb-4">
                        <label for="fecha_caducidad"><i class="bi bi-calendar2-date-fill"></i>FECHA DE VENCIMIENTO</label>
                        <input type="date" name="fecha_caducidad" class="form-control" id="fecha_caducidad" required >
                        <div class="date-danger"></div> 
                    </div>
                    
                    <div class="mb-4">
                        <label for="imagen"><i class="bi bi-camera-fill"></i> IMAGEN DEL PRODUCTO</label>
                        <input type="file" class="form-control" name="imagen" id="imagen"  required>
                        <div class="image-danger"></div>  
                    </div> 
                    <div class="mb-4">
                        <label for="desc_producto"> <i class="bi bi-chat-right-dots-fill" required></i> INFORMACION ADICIONAL</label>
                        <textarea name="desc_producto" id="desc_producto" class="form-control" placeholder="inf.."></textarea>
                        <div class="mensaje text-danger"></div>
                    </div>                                 
                    <div class="mb-2">
                        <button id ="botton" class="col-12 btn btn-warning d-flex justify-content-between ">
                            <span>Publicar </span><i id="icono" class="bi bi-check-lg "></i>
                        </button>
                    </div>
                    <div class="mb-2">
                        <button href="PageIni.php" id ="bottonDescartar" class="col-12 btn btn-dark d-flex justify-content-between" >
                            <span>Descartar </span><i id="iconoDescartar" class="bi bi-x-lg"></i>  
                        </button>
                    </div>      
                </form>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>