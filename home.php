<?php 
        session_start();
        //error_reporting(0); una vez que termino el proyecto, activarlo.
        $varsesion = $_SESSION['usuario'];
        if($varsesion == null || $varsesion == ''){
            echo 'Usted no tiene autorización';
            die();
        }
?>

<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <title>Bienvenide a esta hermosa pagina</title>

    </head>
    <body>
    
    <?php include 'include/header.php';?>
    
        <!-- BARRITA-->
        <section class="fondoindex">
        <ul class="nav justify-content-end">
            
            <p style="color: #F4F1BB" style="text_align:center" style="margin:auto">Bienvenide: </p>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="miperfil.php"><?php echo $_SESSION['usuario']; ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="configuracion.php">Configuración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="deslogear.php">Salir</a>
            </li>

        </ul>
        </section>
        <!--FIN BARRITA-->
        <h2 style="background: #F4F1BB" style="opacity: 0.8"><font size=20>Ingresó correctamente, bienvenide!</font></h2>
        <!-- PORTADA-->
        <div class="container-portada">
            <div class="capa-gradient">
                <div class="container-detalle">
                    <div class="detalle">
                        <h1>Bienvenides</h1>
                        <p> 
                        Candy Shop es una plataforma de compra venta online mayorista y minorista con entrega en toda Argentina.
                        <br>
                        Proveemos a cientos de distribuidores, empresas y consumidores de todo el país haciendo que la compra por mayor sea muy fácil.
                            <br>
                        <button> Ver mas detalles</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flyers-portada">

        </div>
        <!-- FIN PORTADA-->
        <hr>

        <br>
        <br>

        <div class="mx-auto" style="width: 200px;">
        <img width="300" height="300" src="img/pighappy.png"> 
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <?php require_once 'include/footer.php';?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
    
    
    </html>
