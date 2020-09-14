<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <title>Olvide mi contraseña, aiuda</title>

    </head>
    <body>

    <?php require 'include/header.php';?>

    <form action="<?php echo
        htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <br>
        <h1 style="background : #f4f1bb"><font size=30>Recuperando la contraseña que te olvidaste, crack</font></h1>
        <br>
        




        <section class="recuperando">
            <div class="container">
                <div class="row">
                  <div class="col-9">
                    <input class="controlsREG" type="email" name="correo" value="" placeholder="Correo electronico" required>
                  </div>
        <br>
                  <div class="col-4">  
                    <input class="buttons2" type="submit" name="enviar" value="Enviar">
                  </div>
                </div>
            </div>
        <p>
        <?php
        if(isset($_POST['enviar'])){
            
            $correo = $_POST['correo'];
            
            include("php/validarcorreo.php");
        }

        ?>
        </p>
       
    
    
        </section>

    </form>
        <?php  require_once 'include/footer.php';?>
        
    </body>
</html>
