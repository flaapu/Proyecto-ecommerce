<?php

    session_start();
    error_reporting(0);
    include("conexion.php");
    class Carrito extends Gestor{
        private $carro = array();

        public function __construct()
        {       
            if(!isset($_SESSION['CARRITO']))
            {
                $_SESSION['CARRITO'] = $this->carro;
            }
        }
        /*
        public function agregar_item($cod){
            $conn = mysqli_connect("localhost", "root", "", "candyshopbdd");
            $sql = "SELECT * FROM productos WHERE codigo_producto = $cod";
            $respuesta = mysqli_query($conn, $sql);
            foreach($_SESSION['CARRITO'] as $key => $value)
            {   if($respuesta){
                    if(array_key_exists($cod, $_SESSION['CARRITO'])){
                        while($value <= $key['stock']){
                            echo "producto agregado";
                            $_SESSION['CARRITO'][$cod]  ++;
                        }
                    }else {
                        while($value <= $key['stock']){
                            echo "producto agregado";
                            $_SESSION['CARRITO'][$cod] = 1;
                        }
                    }
                }

            }

        }*/
        
        
        public function agregar_item($cod){

            if(isset($_SESSION['CARRITO'])){
                $conn = mysqli_connect("localhost", "user_modify", "umodify1", "candyshopbdd");
                $sql = "UPDATE productos SET stock = stock - 1 WHERE codigo_producto = $cod";
                $respuesta = mysqli_query($conn, $sql);
                if(array_key_exists($cod, $_SESSION['CARRITO'])){
                        if($respuesta){
                            echo "producto agregado";
                            $_SESSION['CARRITO'][$cod]  ++;
                            header('Location: index.php');
                        }
                }else{
                    echo "producto agregado";
                    $_SESSION['CARRITO'][$cod] = 1;
                    header('Location: index.php');
                }
                
                print_r($_SESSION['CARRITO']);

            }
        }
            /*
        public function agregar_item($cod){

            if(isset($_SESSION['CARRITO'])){

                if(array_key_exists($cod, $_SESSION['CARRITO'])){
                    $_SESSION['CARRITO'][$cod]  ++;
                }else{
                    $_SESSION['CARRITO'][$cod] = 1;
                }
                print_r($_SESSION['CARRITO']);
            }
        }*/
        
        

        public function remove_item($cod){
            $conn = mysqli_connect("localhost", "user_modify", "umodify1", "candyshopbdd");
            foreach($_SESSION['CARRITO'] as $key => $value){
                $sql = "UPDATE productos SET stock = stock+$value WHERE codigo_producto = $key";
                $respuesta = mysqli_query($conn, $sql);
                if($respuesta){
                    unset($_SESSION['CARRITO'][$key]);
                    return true;
                }
            }
        }

        public function get_items(){
            $html = '';
            if(isset($_SESSION['CARRITO'])){

                foreach ($_SESSION['CARRITO'] as $key => $value){
                    $conn = mysqli_connect("localhost", "user_normal", "unormal1", "candyshopbdd");

                    $consulta = mysqli_query($conn, "SELECT * FROM productos WHERE codigo_producto = $key");
                    $keysearch = mysqli_fetch_array($consulta);
                    $html = '<tr>
                                <td>'.$keysearch['nombre_producto'].'</td>
                                <td align="left">'.$value.'</td>
                                <td>'.number_format($keysearch['precio'], 2).'</td>
                                
                                <td>'.number_format($keysearch['precio']*$value,2).'</td>
                                
                                <td>
                                    <a href="index.php?action=remove&id='.$keysearch['codigo_producto'].'" class="btn-quitar">
                                        Eliminar
                                    </a>
                                </td>
                              </tr>';
                              echo $html;
                }
            }    
        }
        
        public function get_total_items(){
            $total=0;
            if(!empty($_SESSION['CARRITO'])){
                foreach ($_SESSION['CARRITO'] as $key => $value){
                    $total += $value;
                }
            }
            return $total;
        }

        public function get_total_payment(){
            $total= 0;
            number_format($total, 2);
            if(!empty($_SESSION['CARRITO'])){
                foreach ($_SESSION['CARRITO'] as $key => $value){
                    $conn = mysqli_connect("localhost", "user_normal", "unormal1", "candyshopbdd");

                    $consulta = mysqli_query($conn, "SELECT * FROM productos WHERE codigo_producto = $key");
                    $key = mysqli_fetch_array($consulta);
    
                    $total += $key['precio']*$value;

                }
                
            }
            return number_format($total,2);
        }
        
        public function remover_product(){
            if ($_SESSION['sesioniniciada']){
                if(!empty($_SESSION['CARRITO'])){
                    /*foreach($_SESSION['CARRITO'] as $key => $value){
                    $conn = mysqli_connect("localhost", "root", "", "candyshopbdd");
                    $sql = "UPDATE productos SET stock = stock - $value WHERE codigo_producto = $key";
                    $respuesta = mysqli_query($conn, $sql);*/
                    echo "<script>alert('Compra exitosa!! ya rastreamos su ubicacion por GPS asi que en breve le estamos enviando un drone con su compra. No tenga miedo, estamos para alimentar su gula.')</script>";
                     
                    unset($_SESSION['CARRITO']);
                }else{ echo "ups, algo ocurrio mal";}
                
            }else{
                echo "<script>
                    alert('Para proceder a la compra, por favor inicie sesion')
                    window.location= 'iniciarsesion.php'
                    </script>";}
        }


        
        
        
        

    }
    
?>