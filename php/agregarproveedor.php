<?php
    if (isset($_POST['addnewproduct'])){
        $nombre = $_POST['nombre_p']; 
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $con = new mysqli("localhost", "user_modify", "umodify1", "candyshopbdd");
        $imagen = 'imagenotfound.jpg';
        $stock = 0;
        $sql = "INSERT INTO productos(nombre_producto, descripcion_producto, stock, precio, imagen) VALUES ('$nombre', '$descripcion', $stock, $precio, '$imagen')";
        $respuesta = mysqli_query($con, $sql);
        if($respuesta){
            header("Location: ../configuracion.php");
            echo "gracias señor por proveernos de un nuevo producto <3";
        }
        else{
            echo "noo señor, no pudo agregar su nuevo producto que tanto queremos";
            header("Location: ../configuracion.php");
        }

    }
    
    
?>