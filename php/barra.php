<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       
</head>
<body>

<?php 
$action = "";
$actionurl = "";
$action2 = "";
$actionurl2 = "";
$urlsesion = "";
if($_SESSION['sesioniniciada'] != '0')
{   
    $urlsesion = "php/miperfil.php";
    $action = "Configuracion";
    $actionurl = "configuracion.php";
    $action2 = "Salir";
    $actionurl2 = "php/deslogear.php";
}else{
    $_SESSION['sesioniniciada'] = '';
    $action = "Iniciar sesion";
    $actionurl = "iniciarsesion.php";
    $action2 = "Registrarse";
    $actionurl2 = "registrarse.php";
}

?>

<section class="fondoindex">
        <ul class="nav justify-content-end">
            
            <!--<p style="color: #F4F1BB" style="text_align:center" style="margin-top: -12px">Bienvenide: </p> -->
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href=<?php echo $urlsesion; ?>><?php echo $_SESSION['sesioniniciada']; ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href=<?php echo $actionurl; ?>><?php echo $action; ?> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href=<?php echo $actionurl2; ?>><?php echo $action2; ?></a>
            </li>
            <li class="nav-item">
                <a href="index.php"><img src="./img/shopping-cart.svg" alt=""></a>
            </li>
        </ul>
</section>
</body>
</html>

<!--
<section class="fondoindex">
        <ul class="nav justify-content-end">
            
            <p style="color: #F4F1BB" style="text_align:center" style="margin-top: -12px">Bienvenide: </p>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="php/miperfil.php"> echo $_SESSION['user'];  </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="configuracion.php">Configuración</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #F4F1BB" href="php/deslogear.php">Salir</a>
            </li>

        </ul>
</section>

</body>
</html>
-->
