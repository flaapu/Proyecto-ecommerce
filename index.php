<!--
echo $_SERVER['DOCUMENT_ROOT'];
-->
<!doctype html>

<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title>FLAAPU'S PAGE</title>
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
    </head>
    
    <body>
        <?php require_once 'include/header.php';?>

        <!-- aca estaba el formulario --> 
        <section class="fondoindex">
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="login-registro.php">Iniciar sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="registrarse.php">Registrate</a>
            </li>

        </ul>
        </section>
        
        <div class="container-portada">
            <div class="capa-gradient">
                <div class="container-detalle">
                    <div class="detalle">
                        <h1>Bienvenides</h1>
                        <p> Esta es una pagina que esta en proceso de construcción. La idea es que sea una pagina de compra de juguetes para niñes y demás accesorios para les mismes o un foro de consultas de diseño.
                            <br> Espero que les guste, recuerden que pueden loguearse y pronto podrán hacer sus compras o realizar consultas.. dependiendo que me decido xd
                            <br>
                            <button> Ver mas detalles</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flyers-portada">

        </div>
        <hr>


        <br>
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
