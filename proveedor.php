<?php 
include("modelos/productosbdd.php");
$oProv = new Gestor();
/*if(isset($_GET['action'])){
    switch($_GET['action']){
    case 'addprov':
        $oProv->proveedor_agregar(($_POST['id']),($_POST['id2']));
        break;
    }
}*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <!--scritp para que me cambie el valor del numero-->

        <script>
            function ChangeNumber(val) {
            document.getElementById("cantid").innerHTML = val;
            }
        </script>

            <table class="table table-sm" style="background: lightyellow; width: 1600px; margin: auto; margin-top: 5%;">
                <thead>
                    <tr>
                        <th>QUE TAL SEÑOR PROVEEDOR, NECESITAMOS QUE NOS LLENE DE SUS PRODUCTOS</th>
                    </tr>
                    <tr>
                        <!--<th>Total que le debemos y si cree en Dios, pues Dios se lo paga: <?php //$oProv->get_total_payment();?></th>
                        <th>Total de productos que le sacamos fiado: <?php//$oProv->get_total_items();?></th>-->
                    </tr>
                </thead>
                <thead>
                    <tr>
                    <th scope="col" style="width: 400px">Nombre Producto</th>
                    <th scope="col">Cantidad en stock</th>
                    <th scope="col">Cantidad a agregar</th>
                    <th scope="col"></th>
                    <th scope="col" style="width: 200px">Precio ARG./</th>
                    <th scope="col" style="width: 200px">Total</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?=$oProv->mostrarProductosAlProv(); ?> 
                    
                    <tr>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                    </tr>

                    <thead>
                    <tr>
                        <th>SR PROVEEDOR, PUEDE AGREGAR UN NUEVO PRODUCTO SI USTED DESEA</th>
                    </tr>
                        <tr>
                        <th scope="col">Nombre Producto</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        </tr>
                    </thead>
            <form action="php/agregarproveedor.php" method="POST">
                    <tr>
                        <td><input name="nombre_p" id="nombre_p" type="text" placeholder="Nombre del nuevo producto" pattern="/^[A-Za-z0-9\s]+$/g{1-50}" required></td>
                        <td><input name="descripcion" id="descripcion" type="text" placeholder="Descripcion del nuevo producto" pattern="/^[A-Za-z0-9\s]+$/g{1-50}" required></td>
                        <td><input name="precio" id="precio" type="number" placeholder="Precio del nuevo producto" pattern="^[0-9]+" required></td>
                        <td><input type="submit" name="addnewproduct" class="btn-comprar" value="Agregar un producto nuevo"></td>
                    </tr>
                </tbody>
            </table>

            </form>
    </body>
</html>