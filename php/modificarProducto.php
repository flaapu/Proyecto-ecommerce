<?php

if(isset($_POST['agregarStock']))
{
    $cod = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $conn = new mysqli("localhost", "user_modify", "umodify1", "candyshopbdd");
    $sql = "UPDATE productos SET stock=stock+$cantidad WHERE codigo_producto=$cod";
    $respuesta = mysqli_query($conn, $sql);
    if($respuesta){
        echo"<script>alert('producto agregado, gracias señor')</script>";
        header("Location: ../configuracion.php");
        
    }
    else{
        echo "noo, algo salio mal señor, por favor intente de nuevo";
    }

}

/*<script type="text/javascript">
    function confirmar(){
        if(confirm("Realmente desea eliminar este producto?"))
        {
            return true;
        }
        return false;
    }
</script>    */


if(isset ($_POST['eliminarStock'])){ 
    $cod = $_POST['producto'];
    $con = new mysqli("localhost", "user_delete", "udelete1", "candyshopbdd");
    $sql= "DELETE FROM productos WHERE codigo_producto=$cod";
    $resultado=mysqli_query($con, $sql);
    if($resultado){
        echo "producto eliminado";
        header("Location: ../configuracion.php");
    }
    else {
        echo "epa, salio mal algo, no va sa poder eliminarlo";
    }
    
}

?>