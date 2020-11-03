<?php 
include("modelos/productosbdd.php");
include("modelos/carritobdd.php");
$oProduct = new Gestor(); 
$oCart = new Carrito();
if (isset($_GET['action'])){
    switch($_GET['action']){
        case 'add':
            $oCart->agregar_item($_GET['id']);
            break;
        case 'remove':
            $oCart->remove_item($_GET['id']);
            break;
        case 'confirm':
            $oCart->remover_product($_GET['id']);
    }
}
//print_r($_SESSION);
?>

<!doctype html>
<html lang = "es" dir = "ltr">
    
        <meta charset="utf-8">
        <title>FLAAPU'S PAGE</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>

    </head>
    
    <body>
        <form action="index.php" method="get">
            <?php include 'include/header.php';?>
            <?php include 'include/portada.php';?>

                <!-- CARRITO, DESPUES LO PASO A OTRO LADO .PHP -->    
                
                <table class="table table-sm" style="background: #e9c7cd">
                    <thead>
                        <tr>
                            <th> MI CARRITO DE COMPRAS</th>
                        </tr>
                        <tr>
                            <th>Total a pagar: <?=$oCart->get_total_payment();?></th>
                            <th>Total de productos: <?=$oCart->get_total_items();?></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio ARG./</th>
                        <th scope="col">Total</th>
                        <th scote="col"> </th>
                        <th scote="col"> </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?=$oCart->get_items();?>  

                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="index.php?action=confirm&id='$code'" class="btn-comprar">Confirmar compra</a></td>
                        <!--<button type="submit" class="btn-comprar" name="confirmar" id='.$this->codigo.'>Confirmar</button></td>-->
                        </tr>
                    </tbody>
                </table>
                <!-- PRODUCTOS MUESTRA -->   
                    <div class="main-content">
                    <div class="content-page">
                        <div class="titulo-producto">Nuestros productos</div>
                            <div class="lista-productos" id="espacio-lista">
                                <?php $oProduct->mostrarProductos(); ?>
                            </div>
                        </div>
                    </div>
                    
                
            <?php require_once 'include/footer.php';?>
       </form>     
    </body>
    
</html>