<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/estilo.css">
        <title>Configuracion</title>

    </head>
    <body>
        <?php include 'include/header.php';?>
         
        <?php 
            if($_SESSION['user'] === 'proveedor'){  
                include 'proveedor.php';
            }else{
                echo"Y bueno, la configuracion en otra ocasión la vamos a tener hecha..";
            }
        ?>    
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

        <br>
        <?php include 'include/footer.php';?>
    
    </body>
    
    
</html>