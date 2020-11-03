<!doctype html>
<html lang = "es" dir = "ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@600&family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@600&family=Open+Sans+Condensed:wght@700&family=Raleway:wght@500&display=swap" rel="stylesheet">
        

    </head>
    <body>
        <section class="lindura">
          <ul class="nav justify-content-left">
            <li class="nav-item">
              <a class="nav-link active" href="./index.php">INICIO</a>
            </li>

            <!--
            <li class="nav-item">
               intento de listado 
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="col">
                    PRODUCTOS
                    </div>
                  </button>
                  <div class="dropdown-menu" style="opacity: 0.9" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">• Gomitas</a>
                      <a class="dropdown-item" href="#">• Chocolates</a>
                      <a class="dropdown-item" href="./productos.php">• Malvaviscos</a>
                      <a class="dropdown-item" href="#">• Caramelos</a>
                      <a class="dropdown-item" href="#">• Más cositas</a>
                      <a class="dropdown-item" href="#">• OFERTAS!</a>
                  </div>
                </div>
                

               fin de intento 
            </li>-->
            <li class="nav-item">
              <a class="nav-link active" href="./contacto.php">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./acercade.php">QUIENES SOMOS</a>
            </li>
              <!-- buscador-->
            <li class="nav-item">
            <!--form busqueda-->
            
              
                <input type="text" id="idbusqueda" placeholder="Busca lo que quieras!">
                <button class="btn-main btn-search" name="busqueda"><i class="fa fa-search" aria-hidden="true"></i></button>
              
            
            </li>
            
              <!--fin buscador-->
          </ul>


        </section>

        <!--hacer boton de la busqueda y del carrito-->
        <?php include 'php/validarsesion.php';?>

        
    
    </body>

    
</html>