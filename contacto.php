<!doctype html>

<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title>Contacto</title>
        <link rel="stylesheet" href="css/estilo.css">
        <!-- Google font -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    
    </head>
    
    <body>
        <?php require_once 'include/header.php';?>

        <section class="bordetexto">
            <br>
        
            <?php echo "<p>En el marco de la emergencia sanitaria (COVID-19) y mientras dure el aislamiento social, preventivo y <br> obligatorio no se realizará atención presencial, quedando disponibles sólo los <br> canales electrónicos y telefónicos.</p>"      ?>
        </section>

        <section class="bloquecontacto">
            <div class="container px-lg-5">
                <div class="row mx-lg-n5">
                    <div class="col">
                        <p>Contacto: </p>
                         <br>
                        <a href="mailto:flaviacrolla@hotmail.es"><img width="30" height="30" src="img/correo-electronico.svg" alt="Correo"/><?php echo"  "?> Enviar un correo electrónico</a>
                        <br>
                        <br>
                        <a href="https://api.whatsapp.com/send?phone=5493435004677&text=Hola!%20quiero%20saber%20de%20los%20productos!"><img width="30" height="30" src="img/whatsapp.svg" alt="wsp"/><?php echo"  "?>Enviar un whatsapp!</a>    
                    </div>
                    <div class="col">
                        <p>Ubicación:</p>
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3389.6482908601856!2d-60.52359797503822!3d-31.83456970411642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b44b973b15bedd%3A0xa59a2314fe8063f2!2sFacultad%20de%20Ciencia%20y%20Tecnolog%C3%ADa%20(UADER)!5e0!3m2!1ses!2sar!4v1599715613430!5m2!1ses!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        
                    </div>            
                </div>
            </div>
        
        </section>
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