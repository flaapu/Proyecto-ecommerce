<!--
echo $_SERVER['DOCUMENT_ROOT'];
-->
<!doctype html>

<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title>FLAAPU'S PAGE</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>

    </head>
    
    <body>
        <?php include 'include/header.php';?>
        <?php include 'include/portada.php';?>

        <div class="main-content">
        <div class="content-page">
            <div class="titulo-producto">Nuestros productos</div>
                <div class="lista-productos" id="espacio-lista">
                <?php include("modelos/productosbdd.php"); 
                $oGondola = new Gestor();
                $oGondola->mostrarProductos();

                ?>

                </div>
            </div>
        </div>

       
        <?php require_once 'include/footer.php';?>
        
    </body>
    
</html>